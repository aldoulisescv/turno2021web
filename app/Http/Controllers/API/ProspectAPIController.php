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

        return $this->sendResponse(
            ProspectResource::collection($prospects),
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
