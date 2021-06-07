<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateHelpAPIRequest;
use App\Http\Requests\API\UpdateHelpAPIRequest;
use App\Models\Help;
use App\Repositories\HelpRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\HelpResource;
use Response;

/**
 * Class HelpController
 * @package App\Http\Controllers\API
 */

class HelpAPIController extends AppBaseController
{
    /** @var  HelpRepository */
    private $helpRepository;

    public function __construct(HelpRepository $helpRepo)
    {
        $this->helpRepository = $helpRepo;
    }

    /**
     * Display a listing of the Help.
     * GET|HEAD /helps
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $helps = $this->helpRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            HelpResource::collection($helps),
            __('messages.retrieved', ['model' => __('models/helps.plural')])
        );
    }

    /**
     * Store a newly created Help in storage.
     * POST /helps
     *
     * @param CreateHelpAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateHelpAPIRequest $request)
    {
        $input = $request->all();

        $help = $this->helpRepository->create($input);

        return $this->sendResponse(
            new HelpResource($help),
            __('messages.saved', ['model' => __('models/helps.singular')])
        );
    }

    /**
     * Display the specified Help.
     * GET|HEAD /helps/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Help $help */
        $help = $this->helpRepository->find($id);

        if (empty($help)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/helps.singular')])
            );
        }

        return $this->sendResponse(
            new HelpResource($help),
            __('messages.retrieved', ['model' => __('models/helps.singular')])
        );
    }

    /**
     * Update the specified Help in storage.
     * PUT/PATCH /helps/{id}
     *
     * @param int $id
     * @param UpdateHelpAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHelpAPIRequest $request)
    {
        $input = $request->all();

        /** @var Help $help */
        $help = $this->helpRepository->find($id);

        if (empty($help)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/helps.singular')])
            );
        }

        $help = $this->helpRepository->update($input, $id);

        return $this->sendResponse(
            new HelpResource($help),
            __('messages.updated', ['model' => __('models/helps.singular')])
        );
    }

    /**
     * Remove the specified Help from storage.
     * DELETE /helps/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Help $help */
        $help = $this->helpRepository->find($id);

        if (empty($help)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/helps.singular')])
            );
        }

        $help->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/helps.singular')])
        );
    }
}
