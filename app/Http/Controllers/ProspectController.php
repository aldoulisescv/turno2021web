<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProspectRequest;
use App\Http\Requests\UpdateProspectRequest;
use App\Repositories\ProspectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProspectController extends AppBaseController
{
    /** @var  ProspectRepository */
    private $prospectRepository;

    public function __construct(ProspectRepository $prospectRepo)
    {
        $this->prospectRepository = $prospectRepo;
    }

    /**
     * Display a listing of the Prospect.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $prospects = $this->prospectRepository->all();

        return view('prospects.index')
            ->with('prospects', $prospects);
    }

    /**
     * Show the form for creating a new Prospect.
     *
     * @return Response
     */
    public function create()
    {
        return view('prospects.create');
    }

    /**
     * Store a newly created Prospect in storage.
     *
     * @param CreateProspectRequest $request
     *
     * @return Response
     */
    public function store(CreateProspectRequest $request)
    {
        $input = $request->all();

        $prospect = $this->prospectRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/prospects.singular')]));

        return redirect(route('prospects.index'));
    }

    /**
     * Display the specified Prospect.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prospect = $this->prospectRepository->find($id);

        if (empty($prospect)) {
            Flash::error(__('messages.not_found', ['model' => __('models/prospects.singular')]));

            return redirect(route('prospects.index'));
        }

        return view('prospects.show')->with('prospect', $prospect);
    }

    /**
     * Show the form for editing the specified Prospect.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prospect = $this->prospectRepository->find($id);

        if (empty($prospect)) {
            Flash::error(__('messages.not_found', ['model' => __('models/prospects.singular')]));

            return redirect(route('prospects.index'));
        }

        return view('prospects.edit')->with('prospect', $prospect);
    }

    /**
     * Update the specified Prospect in storage.
     *
     * @param int $id
     * @param UpdateProspectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProspectRequest $request)
    {
        $prospect = $this->prospectRepository->find($id);

        if (empty($prospect)) {
            Flash::error(__('messages.not_found', ['model' => __('models/prospects.singular')]));

            return redirect(route('prospects.index'));
        }

        $prospect = $this->prospectRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/prospects.singular')]));

        return redirect(route('prospects.index'));
    }

    /**
     * Remove the specified Prospect from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prospect = $this->prospectRepository->find($id);

        if (empty($prospect)) {
            Flash::error(__('messages.not_found', ['model' => __('models/prospects.singular')]));

            return redirect(route('prospects.index'));
        }

        $this->prospectRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/prospects.singular')]));

        return redirect(route('prospects.index'));
    }
}
