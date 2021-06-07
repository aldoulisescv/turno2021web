<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHelpRequest;
use App\Http\Requests\UpdateHelpRequest;
use App\Repositories\HelpRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class HelpController extends AppBaseController
{
    /** @var  HelpRepository */
    private $helpRepository;

    public function __construct(HelpRepository $helpRepo)
    {
        $this->helpRepository = $helpRepo;
    }

    /**
     * Display a listing of the Help.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $helps = $this->helpRepository->all();

        return view('helps.index')
            ->with('helps', $helps);
    }

    /**
     * Show the form for creating a new Help.
     *
     * @return Response
     */
    public function create()
    {
        return view('helps.create');
    }

    /**
     * Store a newly created Help in storage.
     *
     * @param CreateHelpRequest $request
     *
     * @return Response
     */
    public function store(CreateHelpRequest $request)
    {
        $input = $request->all();

        $help = $this->helpRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/helps.singular')]));

        return redirect(route('helps.index'));
    }

    /**
     * Display the specified Help.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $help = $this->helpRepository->find($id);

        if (empty($help)) {
            Flash::error(__('messages.not_found', ['model' => __('models/helps.singular')]));

            return redirect(route('helps.index'));
        }

        return view('helps.show')->with('help', $help);
    }

    /**
     * Show the form for editing the specified Help.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $help = $this->helpRepository->find($id);

        if (empty($help)) {
            Flash::error(__('messages.not_found', ['model' => __('models/helps.singular')]));

            return redirect(route('helps.index'));
        }

        return view('helps.edit')->with('help', $help);
    }

    /**
     * Update the specified Help in storage.
     *
     * @param int $id
     * @param UpdateHelpRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHelpRequest $request)
    {
        $help = $this->helpRepository->find($id);

        if (empty($help)) {
            Flash::error(__('messages.not_found', ['model' => __('models/helps.singular')]));

            return redirect(route('helps.index'));
        }

        $help = $this->helpRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/helps.singular')]));

        return redirect(route('helps.index'));
    }

    /**
     * Remove the specified Help from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $help = $this->helpRepository->find($id);

        if (empty($help)) {
            Flash::error(__('messages.not_found', ['model' => __('models/helps.singular')]));

            return redirect(route('helps.index'));
        }

        $this->helpRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/helps.singular')]));

        return redirect(route('helps.index'));
    }
}
