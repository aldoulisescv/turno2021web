<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTurnoAPIRequest;
use App\Http\Requests\API\UpdateTurnoAPIRequest;
use App\Models\Turno;
use App\Models\Session;
use App\Models\Resource;
use App\Models\StatusTurno;
use App\Models\Establishment;
use App\Models\User;
use App\Repositories\TurnoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\TurnoResource;
use Illuminate\Support\Facades\Mail;
use App\Mail\TurnoMail;
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
         foreach ($turnos as $key => $turno) {
            $session = Session::find($turno['session_id']);
            $resourceName = Resource::find($turno['resource_id'])['name'];
            $statusName = StatusTurno::find($turno['status_turno_id'])['name'];
            $user = User::find($turno['user_id']);
            $turnos[$key]['user_name'] = $user['name'].' '.$user['lastname'];
            $turnos[$key]['resource_name'] = $resourceName;
            $turnos[$key]['status_name'] = $statusName;
            $turnos[$key]['session_name'] = $session['name']; 
            $turnos[$key]['color'] = $session['color'];
        }

        return $this->sendResponse($turnos,
            __('messages.retrieved', ['model' => __('models/turnos.plural')])
        );
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
        $estab = Establishment::find($turno['establishment_id']);
        $session = Session::find($turno['session_id']);
        $status = StatusTurno::find($turno['status_turno_id']);
        $user = User::find($turno['user_id']);
        $mailData = array(
            'estabname'     => $estab->name,
            'name'     => $user->name,
            'email'     => $turno->email,
            'asunto'     => 'Tiene un nuevo Turno',
            'status_turno_name'     => $status->name,
            'accion'     => 'creó',
            'hora_inicio'     => date_format($turno->date, 'Y-m-d')  . ' ' . $turno->start_time,
            'session_name'     => $session->name,
           );
        Mail::to($turno['email'])->send(new TurnoMail($mailData));
        return $this->sendResponse(
            new TurnoResource($turno),
            __('messages.saved', ['model' => __('models/turnos.singular')])
        );
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
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/turnos.singular')])
            );
        }

        return $this->sendResponse(
            new TurnoResource($turno),
            __('messages.retrieved', ['model' => __('models/turnos.singular')])
        );
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
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/turnos.singular')])
            );
        }

        $turno = $this->turnoRepository->update($input, $id);
        $estab = Establishment::find($turno['establishment_id']);
        $session = Session::find($turno['session_id']);
        $status = StatusTurno::find($turno['status_turno_id']);
        $user = User::find($turno['user_id']);
        $mailData = array(
            'estabname'     => $estab->name,
            'name'     => $user->name,
            'email'     => $turno->email,
            'asunto'     => 'El estado de su turno ha cambiado',
            'status_turno_name'     => $status->name,
            'accion'     => 'editó',
            'hora_inicio'     => date_format($turno->date, 'Y-m-d') . ' ' . $turno->start_time,
            'session_name'     => $session->name,
           );
        Mail::to($turno['email'])->send(new TurnoMail($mailData));
        return $this->sendResponse(
            new TurnoResource($turno),
            __('messages.updated', ['model' => __('models/turnos.singular')])
        );
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
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/turnos.singular')])
            );
        }

        $turno->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/turnos.singular')])
        );
    }
}
