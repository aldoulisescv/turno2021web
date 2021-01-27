<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRelationResourceSessionAPIRequest;
use App\Http\Requests\API\UpdateRelationResourceSessionAPIRequest;
use App\Models\RelationResourceSession;
use App\Repositories\RelationResourceSessionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\RelationResourceSessionResource;
use Response;

/**
 * Class RelationResourceSessionController
 * @package App\Http\Controllers\API
 */

class RelationResourceSessionAPIController extends AppBaseController
{
    /** @var  RelationResourceSessionRepository */
    private $relationResourceSessionRepository;

    public function __construct(RelationResourceSessionRepository $relationResourceSessionRepo)
    {
        $this->relationResourceSessionRepository = $relationResourceSessionRepo;
    }

    /**
     * Display a listing of the RelationResourceSession.
     * GET|HEAD /relationResourceSessions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $relationResourceSessions = $this->relationResourceSessionRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(RelationResourceSessionResource::collection($relationResourceSessions), 'Relation Resource Sessions retrieved successfully');
    }

    /**
     * Store a newly created RelationResourceSession in storage.
     * POST /relationResourceSessions
     *
     * @param CreateRelationResourceSessionAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRelationResourceSessionAPIRequest $request)
    {
        $input = $request->all();

        $relationResourceSession = $this->relationResourceSessionRepository->create($input);

        return $this->sendResponse(new RelationResourceSessionResource($relationResourceSession), 'Relation Resource Session saved successfully');
    }

    /**
     * Display the specified RelationResourceSession.
     * GET|HEAD /relationResourceSessions/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var RelationResourceSession $relationResourceSession */
        $relationResourceSession = $this->relationResourceSessionRepository->find($id);

        if (empty($relationResourceSession)) {
            return $this->sendError('Relation Resource Session not found');
        }

        return $this->sendResponse(new RelationResourceSessionResource($relationResourceSession), 'Relation Resource Session retrieved successfully');
    }

    /**
     * Update the specified RelationResourceSession in storage.
     * PUT/PATCH /relationResourceSessions/{id}
     *
     * @param int $id
     * @param UpdateRelationResourceSessionAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelationResourceSessionAPIRequest $request)
    {
        $input = $request->all();

        /** @var RelationResourceSession $relationResourceSession */
        $relationResourceSession = $this->relationResourceSessionRepository->find($id);

        if (empty($relationResourceSession)) {
            return $this->sendError('Relation Resource Session not found');
        }

        $relationResourceSession = $this->relationResourceSessionRepository->update($input, $id);

        return $this->sendResponse(new RelationResourceSessionResource($relationResourceSession), 'RelationResourceSession updated successfully');
    }

    /**
     * Remove the specified RelationResourceSession from storage.
     * DELETE /relationResourceSessions/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var RelationResourceSession $relationResourceSession */
        $relationResourceSession = $this->relationResourceSessionRepository->find($id);

        if (empty($relationResourceSession)) {
            return $this->sendError('Relation Resource Session not found');
        }

        $relationResourceSession->delete();

        return $this->sendSuccess('Relation Resource Session deleted successfully');
    }
}
