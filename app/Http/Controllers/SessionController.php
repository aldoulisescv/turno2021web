<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSessionRequest;
use App\Http\Requests\UpdateSessionRequest;
use App\Repositories\SessionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SessionController extends AppBaseController
{
    /** @var  SessionRepository */
    private $sessionRepository;

    public function __construct(SessionRepository $sessionRepo)
    {
        $this->sessionRepository = $sessionRepo;
    }

    /**
     * Display a listing of the Session.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sessions = $this->sessionRepository->all();

        return view('sessions.index')
            ->with('sessions', $sessions);
    }

    /**
     * Show the form for creating a new Session.
     *
     * @return Response
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * Store a newly created Session in storage.
     *
     * @param CreateSessionRequest $request
     *
     * @return Response
     */
    public function store(CreateSessionRequest $request)
    {
        $input = $request->all();
        // dd($input);
        $input = array_map(function($item) { return $item ?: 0; }, $input);
        //  dd($input);
        $input['end_date'] = ($input['end_date']==0)?null:$input['end_date'];
        //  dd($input);
        $session = $this->sessionRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/sessions.singular')]));

        return redirect(route('sessions.index'));
    }

    /**
     * Display the specified Session.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $session = $this->sessionRepository->find($id);

        if (empty($session)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sessions.singular')]));

            return redirect(route('sessions.index'));
        }

        return view('sessions.show')->with('session', $session);
    }

    /**
     * Show the form for editing the specified Session.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $session = $this->sessionRepository->find($id);

        if (empty($session)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sessions.singular')]));

            return redirect(route('sessions.index'));
        }

        return view('sessions.edit')->with('session', $session);
    }

    /**
     * Update the specified Session in storage.
     *
     * @param int $id
     * @param UpdateSessionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSessionRequest $request)
    {
        $session = $this->sessionRepository->find($id);

        if (empty($session)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sessions.singular')]));

            return redirect(route('sessions.index'));
        }

        // dd($input);
        $input = $request->all();
        $input = array_map(function($item) { return $item ?: 0; }, $input);
        //  dd($input);
        $input['end_date'] = ($input['end_date']==0)?null:$input['end_date'];
        //  dd($input);
        $session = $this->sessionRepository->update($input, $id);

        Flash::success(__('messages.updated', ['model' => __('models/sessions.singular')]));

        return redirect(route('sessions.index'));
    }

    /**
     * Remove the specified Session from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $session = $this->sessionRepository->find($id);

        if (empty($session)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sessions.singular')]));

            return redirect(route('sessions.index'));
        }

        $this->sessionRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/sessions.singular')]));

        return redirect(route('sessions.index'));
    }
}
