<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStatusTurnoRequest;
use App\Http\Requests\UpdateStatusTurnoRequest;
use App\Repositories\StatusTurnoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StatusTurnoController extends AppBaseController
{
    /** @var  StatusTurnoRepository */
    private $statusTurnoRepository;

    public function __construct(StatusTurnoRepository $statusTurnoRepo)
    {
        $this->statusTurnoRepository = $statusTurnoRepo;
    }

    /**
     * Display a listing of the StatusTurno.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $statusTurnos = $this->statusTurnoRepository->all();

        return view('status_turnos.index')
            ->with('statusTurnos', $statusTurnos);
    }

    /**
     * Show the form for creating a new StatusTurno.
     *
     * @return Response
     */
    public function create()
    {
        return view('status_turnos.create');
    }

    /**
     * Store a newly created StatusTurno in storage.
     *
     * @param CreateStatusTurnoRequest $request
     *
     * @return Response
     */
    public function store(CreateStatusTurnoRequest $request)
    {
        $input = $request->all();

        $statusTurno = $this->statusTurnoRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/statusTurnos.singular')]));

        return redirect(route('statusTurnos.index'));
    }

    /**
     * Display the specified StatusTurno.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $statusTurno = $this->statusTurnoRepository->find($id);

        if (empty($statusTurno)) {
            Flash::error(__('messages.not_found', ['model' => __('models/statusTurnos.singular')]));

            return redirect(route('statusTurnos.index'));
        }

        return view('status_turnos.show')->with('statusTurno', $statusTurno);
    }

    /**
     * Show the form for editing the specified StatusTurno.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $statusTurno = $this->statusTurnoRepository->find($id);

        if (empty($statusTurno)) {
            Flash::error(__('messages.not_found', ['model' => __('models/statusTurnos.singular')]));

            return redirect(route('statusTurnos.index'));
        }

        return view('status_turnos.edit')->with('statusTurno', $statusTurno);
    }

    /**
     * Update the specified StatusTurno in storage.
     *
     * @param int $id
     * @param UpdateStatusTurnoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStatusTurnoRequest $request)
    {
        $statusTurno = $this->statusTurnoRepository->find($id);

        if (empty($statusTurno)) {
            Flash::error(__('messages.not_found', ['model' => __('models/statusTurnos.singular')]));

            return redirect(route('statusTurnos.index'));
        }

        $statusTurno = $this->statusTurnoRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/statusTurnos.singular')]));

        return redirect(route('statusTurnos.index'));
    }

    /**
     * Remove the specified StatusTurno from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $statusTurno = $this->statusTurnoRepository->find($id);

        if (empty($statusTurno)) {
            Flash::error(__('messages.not_found', ['model' => __('models/statusTurnos.singular')]));

            return redirect(route('statusTurnos.index'));
        }

        $this->statusTurnoRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/statusTurnos.singular')]));

        return redirect(route('statusTurnos.index'));
    }
}
