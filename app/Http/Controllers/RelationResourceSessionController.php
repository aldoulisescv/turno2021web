<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRelationResourceSessionRequest;
use App\Http\Requests\UpdateRelationResourceSessionRequest;
use App\Repositories\RelationResourceSessionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RelationResourceSessionController extends AppBaseController
{
    /** @var  RelationResourceSessionRepository */
    private $relationResourceSessionRepository;

    public function __construct(RelationResourceSessionRepository $relationResourceSessionRepo)
    {
        $this->relationResourceSessionRepository = $relationResourceSessionRepo;
    }

    /**
     * Display a listing of the RelationResourceSession.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $relationResourceSessions = $this->relationResourceSessionRepository->all();

        return view('relation_resource_sessions.index')
            ->with('relationResourceSessions', $relationResourceSessions);
    }

    /**
     * Show the form for creating a new RelationResourceSession.
     *
     * @return Response
     */
    public function create()
    {
        return view('relation_resource_sessions.create');
    }

    /**
     * Store a newly created RelationResourceSession in storage.
     *
     * @param CreateRelationResourceSessionRequest $request
     *
     * @return Response
     */
    public function store(CreateRelationResourceSessionRequest $request)
    {
        $input = $request->all();

        $relationResourceSession = $this->relationResourceSessionRepository->create($input);

        Flash::success('Relation Resource Session saved successfully.');

        return redirect(route('relationResourceSessions.index'));
    }

    /**
     * Display the specified RelationResourceSession.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relationResourceSession = $this->relationResourceSessionRepository->find($id);

        if (empty($relationResourceSession)) {
            Flash::error('Relation Resource Session not found');

            return redirect(route('relationResourceSessions.index'));
        }

        return view('relation_resource_sessions.show')->with('relationResourceSession', $relationResourceSession);
    }

    /**
     * Show the form for editing the specified RelationResourceSession.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relationResourceSession = $this->relationResourceSessionRepository->find($id);

        if (empty($relationResourceSession)) {
            Flash::error('Relation Resource Session not found');

            return redirect(route('relationResourceSessions.index'));
        }

        return view('relation_resource_sessions.edit')->with('relationResourceSession', $relationResourceSession);
    }

    /**
     * Update the specified RelationResourceSession in storage.
     *
     * @param int $id
     * @param UpdateRelationResourceSessionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelationResourceSessionRequest $request)
    {
        $relationResourceSession = $this->relationResourceSessionRepository->find($id);

        if (empty($relationResourceSession)) {
            Flash::error('Relation Resource Session not found');

            return redirect(route('relationResourceSessions.index'));
        }

        $relationResourceSession = $this->relationResourceSessionRepository->update($request->all(), $id);

        Flash::success('Relation Resource Session updated successfully.');

        return redirect(route('relationResourceSessions.index'));
    }

    /**
     * Remove the specified RelationResourceSession from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relationResourceSession = $this->relationResourceSessionRepository->find($id);

        if (empty($relationResourceSession)) {
            Flash::error('Relation Resource Session not found');

            return redirect(route('relationResourceSessions.index'));
        }

        $this->relationResourceSessionRepository->delete($id);

        Flash::success('Relation Resource Session deleted successfully.');

        return redirect(route('relationResourceSessions.index'));
    }
}
