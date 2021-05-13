<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEstablishmentAPIRequest;
use App\Http\Requests\API\UpdateEstablishmentAPIRequest;
use App\Models\Establishment;
use App\Models\Category;
use App\Repositories\EstablishmentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\EstablishmentResource;
use Response;

/**
 * Class EstablishmentController
 * @package App\Http\Controllers\API
 */

class EstablishmentAPIController extends AppBaseController
{
    /** @var  EstablishmentRepository */
    private $establishmentRepository;

    public function __construct(EstablishmentRepository $establishmentRepo)
    {
        $this->establishmentRepository = $establishmentRepo;
    }

    /**
     * Display a listing of the Establishment.
     * GET|HEAD /establishments
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $establishments = $this->establishmentRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(EstablishmentResource::collection($establishments), 'Establishments retrieved successfully');
    }

    /**
     * Store a newly created Establishment in storage.
     * POST /establishments
     *
     * @param CreateEstablishmentAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateEstablishmentAPIRequest $request)
    {
        $input = $request->all();

        $establishment = $this->establishmentRepository->create($input);

        return $this->sendResponse(new EstablishmentResource($establishment), 'Establishment saved successfully');
    }

    /**
     * Display the specified Establishment.
     * GET|HEAD /establishments/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Establishment $establishment */
        $establishment = $this->establishmentRepository->find($id);
        if (empty($establishment)) {
            return $this->sendError('Establishment not found');
        }
        $cat =Category::find($establishment['category_id']);
        $subcats = explode(',',$establishment['subcategory_id']);
        $items = Category::whereIn('id', $subcats)->get()->toArray();
        $subcatsnames = implode(',',array_column($items,'name') );
        $establishment['category_name']= $cat['name'];
        $establishment['subcategory_name']= $subcatsnames;
        

        return $this->sendResponse($establishment, 'Establishment retrieved successfully');
    }

    /**
     * Update the specified Establishment in storage.
     * PUT/PATCH /establishments/{id}
     *
     * @param int $id
     * @param UpdateEstablishmentAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstablishmentAPIRequest $request)
    {
        $input = $request->all();

        /** @var Establishment $establishment */
        $establishment = $this->establishmentRepository->find($id);

        if (empty($establishment)) {
            return $this->sendError('Establishment not found');
        }

        $establishment = $this->establishmentRepository->update($input, $id);

        return $this->sendResponse(new EstablishmentResource($establishment), 'Establishment updated successfully');
    }

    /**
     * Remove the specified Establishment from storage.
     * DELETE /establishments/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Establishment $establishment */
        $establishment = $this->establishmentRepository->find($id);

        if (empty($establishment)) {
            return $this->sendError('Establishment not found');
        }

        $establishment->delete();

        return $this->sendSuccess('Establishment deleted successfully');
    }
}
