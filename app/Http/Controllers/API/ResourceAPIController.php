<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateResourceAPIRequest;
use App\Http\Requests\API\UpdateResourceAPIRequest;
use App\Models\Resource;
use App\Models\RelationResourceSession;
use App\Repositories\ResourceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\ResourceResource;
use Response;

/**
 * Class ResourceController
 * @package App\Http\Controllers\API
 */

class ResourceAPIController extends AppBaseController
{
    /** @var  ResourceRepository */
    private $resourceRepository;

    public function __construct(ResourceRepository $resourceRepo)
    {
        $this->resourceRepository = $resourceRepo;
    }

    /**
     * Display a listing of the Resource.
     * GET|HEAD /resources
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $resources = $this->resourceRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );
        foreach ($resources as $key => $resource) {
            $relation =RelationResourceSession::where('resource_id',$resource['id'])->get();
            $existentes = array_column( $relation->toArray(),'session_id');
            $resources[$key]['sesiones'] = $existentes;
        }

        return $this->sendResponse($resources, 'Resources retrieved successfully');
    }

    /**
     * Store a newly created Resource in storage.
     * POST /resources
     *
     * @param CreateResourceAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateResourceAPIRequest $request)
    {
        $input = $request->all();

        $resource = $this->resourceRepository->create($input);
        $resource_id = $resource->id;
        $nuevas = $request['seleccionados'];
        $relation =RelationResourceSession::where('resource_id',$resource_id)->get();
        $existentes = array_column( $relation->toArray(),'session_id');
        $guardar = array_diff($nuevas, $existentes);
        $eliminar = array_diff($existentes, $nuevas);

        foreach ($guardar as $key => $value) {
            $model = new RelationResourceSession([
                'resource_id' => $resource_id,
                'session_id' => $value
            ]);
            $model->save();
        }

        foreach ($eliminar as $key => $value) {
           $model = RelationResourceSession::where('resource_id',$resource_id)->where('session_id',$value)->delete();
        }

        $salida['guardar']=$guardar;
        $salida['eliminar']=$eliminar;
        $salida['existentes']=$existentes;
        $salida['nuevas']=$nuevas;
        $resource['sesiones']=array_unique(array_merge($nuevas, $existentes));

        return $this->sendResponse($resource, 'Resource saved successfully');
    }

    /**
     * Display the specified Resource.
     * GET|HEAD /resources/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {

        
        /** @var Resource $resource */
        $resource = $this->resourceRepository->find($id);
        $relation =RelationResourceSession::where('resource_id',$resource->id)->get();

        $existentes = array_column( $relation->toArray(),'session_id');

        $resource['sesiones']= $existentes;
        if (empty($resource)) {
            return $this->sendError('Resource not found');
        }

        return $this->sendResponse($resource, 'Resource retrieved successfully');
    }

    /**
     * Update the specified Resource in storage.
     * PUT/PATCH /resources/{id}
     *
     * @param int $id
     * @param UpdateResourceAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateResourceAPIRequest $request)
    {
        $input = $request->all();

        /** @var Resource $resource */
        $resource = $this->resourceRepository->find($id);

        if (empty($resource)) {
            return $this->sendError('Resource not found');
        }

        $resource = $this->resourceRepository->update($input, $id);
        $resource_id = $id;
        $nuevas = $request['seleccionados'];
        $relation =RelationResourceSession::where('resource_id',$resource_id)->get();
        $existentes = array_column( $relation->toArray(),'session_id');
        $guardar = array_diff($nuevas, $existentes);
        $eliminar = array_diff($existentes, $nuevas);
        foreach ($guardar as $key => $value) {
            $model = new RelationResourceSession([
                'resource_id' => $resource_id,
                'session_id' => $value
            ]);
            $model->save();
        }
        foreach ($eliminar as $key => $value) {
           $model = RelationResourceSession::where('resource_id',$resource_id)->where('session_id',$value)->delete();
        }

        $salida['guardar']=$guardar;
        $salida['eliminar']=$eliminar;
        $salida['existentes']=$existentes;
        $salida['nuevas']=$nuevas;
        $resource['sesiones']=array_diff(array_unique(array_merge($nuevas, $existentes)), $eliminar);

        return $this->sendResponse($resource, 'Resource updated successfully');
    }

    /**
     * Remove the specified Resource from storage.
     * DELETE /resources/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Resource $resource */
        $resource = $this->resourceRepository->find($id);
        
        if (empty($resource)) {
            return $this->sendError('Resource not found');
        }
        $resource_id = $id;

        $relation =RelationResourceSession::where('resource_id',$resource_id)->get();
        $eliminar = array_column( $relation->toArray(),'session_id');
        foreach ($eliminar as $key => $value) {
            $model = RelationResourceSession::where('resource_id',$resource_id)->where('session_id',$value)->delete();
         }
        $resource->delete();

        return $this->sendSuccess('Resource deleted successfully');
    }
}
