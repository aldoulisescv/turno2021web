<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateUserAPIRequest;
use App\Http\Requests\API\UpdateUserAPIRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\UserResource;
use Response;

/**
 * Class UserController
 * @package App\Http\Controllers\API
 */

class UserAPIController extends AppBaseController
{
    /** @var  UserRepository */
    private $UserRepository;

    public function __construct(UserRepository $UserRepo)
    {
        $this->UserRepository = $UserRepo;
    }

    /**
     * Display a listing of the User.
     * GET|HEAD /users
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $role= $request->input('role');
        // dd($role);
        if($role){
            $users = User::whereHas(
                'roles', function($q)use ($role){
                    $q->where('name', $role);
                }
            )->get();
        }else{
            $users = $this->UserRepository->all(
                $request->except(['skip', 'limit']),
                $request->get('skip'),
                $request->get('limit')
            );
        }
        
        return $this->sendResponse(
            UserResource::collection($users),
            __('messages.retrieved', ['model' => __('models/users.plural')])
        );
    }

    /**
     * Store a newly created User in storage.
     * POST /users
     *
     * @param CreateUserAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateUserAPIRequest $request)
    {
        $input = $request->all();

        $User = $this->UserRepository->create($input);

        return $this->sendResponse(
            new UserResource($User),
            __('messages.saved', ['model' => __('models/users.singular')])
        );
    }

    /**
     * Display the specified User.
     * GET|HEAD /users/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var User $User */
        $User = $this->UserRepository->find($id);
        
        if (empty($User)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/users.singular')])
            );
        }
        $estabs = User::whereHas(
            'roles', function($q){
                $q->where('name', 'admin');
            }
        )->where('ref_code',$User->user_name)->where('email_verified_at','<>', '')->get();
        $clientes = User::whereHas(
            'roles', function($q){
                $q->where('name', 'client');
            }
        )->where('ref_code',$User->user_name)->where('email_verified_at','<>', '')->get();
        $User['estabs']=count($estabs);
        $User['clients']=count($clientes);
        return $this->sendResponse(
            new UserResource($User),
            __('messages.retrieved', ['model' => __('models/users.singular')])
        );
    }

    /**
     * Update the specified User in storage.
     * PUT/PATCH /users/{id}
     *
     * @param int $id
     * @param UpdateUserAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserAPIRequest $request)
    {
        $input = $request->all();

        /** @var User $User */
        $User = $this->UserRepository->find($id);

        if (empty($User)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/users.singular')])
            );
        }

        $User = $this->UserRepository->update($input, $id);
        if ($request->role) {
            $User->roles()->detach();
            $User->assignRole($request->role);
        }

        return $this->sendResponse(
            new UserResource($User),
            __('messages.updated', ['model' => __('models/users.singular')])
        );
    }

    /**
     * Remove the specified User from storage.
     * DELETE /users/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var User $User */
        $User = $this->UserRepository->find($id);

        if (empty($User)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/users.singular')])
            );
        }

        $User->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/users.singular')])
        );
    }
}
