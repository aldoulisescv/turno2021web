<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProspectAPIRequest;
use App\Http\Requests\API\UpdateProspectAPIRequest;
use App\Models\Prospect;
use App\Repositories\ProspectRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\ProspectResource;
use Response;
use DB;
use Illuminate\Support\Facades\Validator;

/**
 * Class ProspectController
 * @package App\Http\Controllers\API
 */

class ProspectAPIController extends AppBaseController
{
    /** @var  ProspectRepository */
    private $prospectRepository;

    public function __construct(ProspectRepository $prospectRepo)
    {
        $this->prospectRepository = $prospectRepo;
    }
    public function saveImage(Request $request){
        try{
            if(!isset($request->id)){
                $id = DB::table('INFORMATION_SCHEMA.TABLES')
                    ->select('AUTO_INCREMENT as id')
                    ->where('TABLE_NAME',$request->name.'s')
                    ->get();
            //  dd($id[0]->id);
            //     $statement = DB::select("SHOW TABLE STATUS LIKE '".$request->name."s'");
            //     $nextId = $statement[0]->Auto_increment;
                $nextId = $id[0]->id;
            }else{
                $nextId = $request->id;
            }
            $image = $request->file('image');
            $disk = \Storage::disk('gcs');
            $disk->putFileAs( $request->name."s", $image,  $request->name.'_' . $nextId.'.png');
            
            $url = $disk->url( $request->name.'_' . $nextId.'.png');
            return $this->sendResponse(
                $url,
                'success', '200'
            );
        } catch(\Exception $e) {
            return $this->sendError(
                $e->getMessage(), 200
            );
        }
    }
    public function uploadImage(Request $request) 
	{
         try {
            $image = $request->file('image');
            $save_path = storage_path().'/app/public/';
            if(!isset($request->id)){
                $statement = DB::select("SHOW TABLE STATUS LIKE '".$request->name."s'");
                $nextId = $statement[0]->Auto_increment;
            }else{
                $nextId = $request->id;
            }
            $image->move($save_path.$request->name.'s/', $request->name.'_' . $nextId.'.png');

        } catch(\Exception $e) {
            return $this->sendError(
                $e->getMessage(), 200
            );
        }
        return $this->sendResponse(
            $request->name.'s/'. $request->name.'_' . $nextId.'.png',
            'success', '200'
        );
	}
    public function prospects(){
        // $req = Request::create('/my/url', 'POST', $params);
        $req = Request::create('/api/prospects', 'GET');
        $res = app()->handle($req);
        $responseBody = $res->getContent();
        $p = json_decode($responseBody);
        //  $p = $p['data'];
        $s['pros']=$p->data;
        $s['es']=$p->data;
        return $this->sendResponse(
             $s,
             __('messages.retrieved', ['model' => __('models/prospects.plural')])
         );
        dd($responseBody);
    }
    /**
     * Display a listing of the Prospect.
     * GET|HEAD /prospects
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $prospects = $this->prospectRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );
        $prospects = $prospects->sort(function ($a, $b) {
                return strtotime($a->created_at) < strtotime($b->created_at);
            
        });
        $prospects = array_slice($prospects->toArray(),0,10);
        return $this->sendResponse(
           $prospects,
            __('messages.retrieved', ['model' => __('models/prospects.plural')])
        );
    }

    /**
     * Store a newly created Prospect in storage.
     * POST /prospects
     *
     * @param CreateProspectAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProspectAPIRequest $request)
    {
        $input = $request->all();
        $statement = DB::select("SHOW TABLE STATUS LIKE 'prospects'");
        $nextId = $statement[0]->Auto_increment;
        $input['image']='prospects/prospect_'.$nextId.'.png';
        $prospect = $this->prospectRepository->create($input);
        return $this->sendResponse(
            new ProspectResource($prospect),
            __('messages.saved', ['model' => __('models/prospects.singular')])
        );
    }

    /**
     * Display the specified Prospect.
     * GET|HEAD /prospects/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Prospect $prospect */
        $prospect = $this->prospectRepository->find($id);

        if (empty($prospect)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/prospects.singular')])
            );
        }

        return $this->sendResponse(
            new ProspectResource($prospect),
            __('messages.retrieved', ['model' => __('models/prospects.singular')])
        );
    }

    /**
     * Update the specified Prospect in storage.
     * PUT/PATCH /prospects/{id}
     *
     * @param int $id
     * @param UpdateProspectAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProspectAPIRequest $request)
    {
        $input = $request->all();

        /** @var Prospect $prospect */
        $prospect = $this->prospectRepository->find($id);

        if (empty($prospect)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/prospects.singular')])
            );
        }

        $input['image']='prospects/prospect_'.$id.'.png';
        $prospect = $this->prospectRepository->update($input, $id);

        return $this->sendResponse(
            new ProspectResource($prospect),
            __('messages.updated', ['model' => __('models/prospects.singular')])
        );
    }

    /**
     * Remove the specified Prospect from storage.
     * DELETE /prospects/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Prospect $prospect */
        $prospect = $this->prospectRepository->find($id);

        if (empty($prospect)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/prospects.singular')])
            );
        }

        $prospect->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/prospects.singular')])
        );
    }
}
