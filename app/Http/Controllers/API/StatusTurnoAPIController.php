<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateStatusTurnoAPIRequest;
use App\Http\Requests\API\UpdateStatusTurnoAPIRequest;
use App\Models\StatusTurno;
use App\Repositories\StatusTurnoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\StatusTurnoResource;
use Response;

/**
 * Class StatusTurnoController
 * @package App\Http\Controllers\API
 */

class StatusTurnoAPIController extends AppBaseController
{
    /** @var  StatusTurnoRepository */
    private $statusTurnoRepository;

    public function __construct(StatusTurnoRepository $statusTurnoRepo)
    {
        $this->statusTurnoRepository = $statusTurnoRepo;
    }

    /**
     * Display a listing of the StatusTurno.
     * GET|HEAD /statusTurnos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $statusTurnos = $this->statusTurnoRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            StatusTurnoResource::collection($statusTurnos),
            __('messages.retrieved', ['model' => __('models/statusTurnos.plural')])
        );
    }

    /**
     * Store a newly created StatusTurno in storage.
     * POST /statusTurnos
     *
     * @param CreateStatusTurnoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateStatusTurnoAPIRequest $request)
    {
        $input = $request->all();

        $statusTurno = $this->statusTurnoRepository->create($input);

        return $this->sendResponse(
            new StatusTurnoResource($statusTurno),
            __('messages.saved', ['model' => __('models/statusTurnos.singular')])
        );
    }

    /**
     * Display the specified StatusTurno.
     * GET|HEAD /statusTurnos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var StatusTurno $statusTurno */
        $statusTurno = $this->statusTurnoRepository->find($id);

        if (empty($statusTurno)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/statusTurnos.singular')])
            );
        }

        return $this->sendResponse(
            new StatusTurnoResource($statusTurno),
            __('messages.retrieved', ['model' => __('models/statusTurnos.singular')])
        );
    }

    /**
     * Update the specified StatusTurno in storage.
     * PUT/PATCH /statusTurnos/{id}
     *
     * @param int $id
     * @param UpdateStatusTurnoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStatusTurnoAPIRequest $request)
    {
        $input = $request->all();

        /** @var StatusTurno $statusTurno */
        $statusTurno = $this->statusTurnoRepository->find($id);

        if (empty($statusTurno)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/statusTurnos.singular')])
            );
        }

        $statusTurno = $this->statusTurnoRepository->update($input, $id);

        return $this->sendResponse(
            new StatusTurnoResource($statusTurno),
            __('messages.updated', ['model' => __('models/statusTurnos.singular')])
        );
    }

    /**
     * Remove the specified StatusTurno from storage.
     * DELETE /statusTurnos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var StatusTurno $statusTurno */
        $statusTurno = $this->statusTurnoRepository->find($id);

        if (empty($statusTurno)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/statusTurnos.singular')])
            );
        }

        $statusTurno->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/statusTurnos.singular')])
        );
    }
}
