<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTurnoAPIRequest;
use App\Http\Requests\API\UpdateTurnoAPIRequest;
use App\Models\Turno;
use App\Repositories\TurnoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\TurnoResource;
use Response;

/**
 * Class TurnoController
 * @package App\Http\Controllers\API
 */

class TurnoAPIController extends AppBaseController
{
    /** @var  TurnoRepository */
    private $turnoRepository;

    public function __construct(TurnoRepository $turnoRepo)
    {
        $this->turnoRepository = $turnoRepo;
    }

    /**
     * Display a listing of the Turno.
     * GET|HEAD /turnos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $turnos = $this->turnoRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(TurnoResource::collection($turnos), 'Turnos retrieved successfully');
    }

    /**
     * Store a newly created Turno in storage.
     * POST /turnos
     *
     * @param CreateTurnoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTurnoAPIRequest $request)
    {
        $input = $request->all();

        $turno = $this->turnoRepository->create($input);

        return $this->sendResponse(new TurnoResource($turno), 'Turno saved successfully');
    }

    /**
     * Display the specified Turno.
     * GET|HEAD /turnos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Turno $turno */
        $turno = $this->turnoRepository->find($id);

        if (empty($turno)) {
            return $this->sendError('Turno not found');
        }

        return $this->sendResponse(new TurnoResource($turno), 'Turno retrieved successfully');
    }

    /**
     * Update the specified Turno in storage.
     * PUT/PATCH /turnos/{id}
     *
     * @param int $id
     * @param UpdateTurnoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTurnoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Turno $turno */
        $turno = $this->turnoRepository->find($id);

        if (empty($turno)) {
            return $this->sendError('Turno not found');
        }

        $turno = $this->turnoRepository->update($input, $id);

        return $this->sendResponse(new TurnoResource($turno), 'Turno updated successfully');
    }

    /**
     * Remove the specified Turno from storage.
     * DELETE /turnos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Turno $turno */
        $turno = $this->turnoRepository->find($id);

        if (empty($turno)) {
            return $this->sendError('Turno not found');
        }

        $turno->delete();

        return $this->sendSuccess('Turno deleted successfully');
    }
}
