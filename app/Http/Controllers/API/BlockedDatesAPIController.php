<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBlockedDatesAPIRequest;
use App\Http\Requests\API\UpdateBlockedDatesAPIRequest;
use App\Models\BlockedDates;
use App\Repositories\BlockedDatesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\BlockedDatesResource;
use Response;

/**
 * Class BlockedDatesController
 * @package App\Http\Controllers\API
 */

class BlockedDatesAPIController extends AppBaseController
{
    /** @var  BlockedDatesRepository */
    private $blockedDatesRepository;

    public function __construct(BlockedDatesRepository $blockedDatesRepo)
    {
        $this->blockedDatesRepository = $blockedDatesRepo;
    }

    /**
     * Display a listing of the BlockedDates.
     * GET|HEAD /blockedDates
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $blockedDates = $this->blockedDatesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            BlockedDatesResource::collection($blockedDates),
            __('messages.retrieved', ['model' => __('models/blockedDates.plural')])
        );
    }

    /**
     * Store a newly created BlockedDates in storage.
     * POST /blockedDates
     *
     * @param CreateBlockedDatesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateBlockedDatesAPIRequest $request)
    {
        $input = $request->all();

        $blockedDates = $this->blockedDatesRepository->create($input);

        return $this->sendResponse(
            new BlockedDatesResource($blockedDates),
            __('messages.saved', ['model' => __('models/blockedDates.singular')])
        );
    }

    /**
     * Display the specified BlockedDates.
     * GET|HEAD /blockedDates/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var BlockedDates $blockedDates */
        $blockedDates = $this->blockedDatesRepository->find($id);

        if (empty($blockedDates)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/blockedDates.singular')])
            );
        }

        return $this->sendResponse(
            new BlockedDatesResource($blockedDates),
            __('messages.retrieved', ['model' => __('models/blockedDates.singular')])
        );
    }

    /**
     * Update the specified BlockedDates in storage.
     * PUT/PATCH /blockedDates/{id}
     *
     * @param int $id
     * @param UpdateBlockedDatesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlockedDatesAPIRequest $request)
    {
        $input = $request->all();

        /** @var BlockedDates $blockedDates */
        $blockedDates = $this->blockedDatesRepository->find($id);

        if (empty($blockedDates)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/blockedDates.singular')])
            );
        }

        $blockedDates = $this->blockedDatesRepository->update($input, $id);

        return $this->sendResponse(
            new BlockedDatesResource($blockedDates),
            __('messages.updated', ['model' => __('models/blockedDates.singular')])
        );
    }

    /**
     * Remove the specified BlockedDates from storage.
     * DELETE /blockedDates/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var BlockedDates $blockedDates */
        $blockedDates = $this->blockedDatesRepository->find($id);

        if (empty($blockedDates)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/blockedDates.singular')])
            );
        }

        $blockedDates->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/blockedDates.singular')])
        );
    }
}
