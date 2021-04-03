<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlockedDatesRequest;
use App\Http\Requests\UpdateBlockedDatesRequest;
use App\Repositories\BlockedDatesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BlockedDatesController extends AppBaseController
{
    /** @var  BlockedDatesRepository */
    private $blockedDatesRepository;

    public function __construct(BlockedDatesRepository $blockedDatesRepo)
    {
        $this->blockedDatesRepository = $blockedDatesRepo;
    }

    /**
     * Display a listing of the BlockedDates.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $blockedDates = $this->blockedDatesRepository->all();

        return view('blocked_dates.index')
            ->with('blockedDates', $blockedDates);
    }

    /**
     * Show the form for creating a new BlockedDates.
     *
     * @return Response
     */
    public function create()
    {
        return view('blocked_dates.create');
    }

    /**
     * Store a newly created BlockedDates in storage.
     *
     * @param CreateBlockedDatesRequest $request
     *
     * @return Response
     */
    public function store(CreateBlockedDatesRequest $request)
    {
        $input = $request->all();

        $blockedDates = $this->blockedDatesRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/blockedDates.singular')]));

        return redirect(route('blockedDates.index'));
    }

    /**
     * Display the specified BlockedDates.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blockedDates = $this->blockedDatesRepository->find($id);

        if (empty($blockedDates)) {
            Flash::error(__('messages.not_found', ['model' => __('models/blockedDates.singular')]));

            return redirect(route('blockedDates.index'));
        }

        return view('blocked_dates.show')->with('blockedDates', $blockedDates);
    }

    /**
     * Show the form for editing the specified BlockedDates.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blockedDates = $this->blockedDatesRepository->find($id);

        if (empty($blockedDates)) {
            Flash::error(__('messages.not_found', ['model' => __('models/blockedDates.singular')]));

            return redirect(route('blockedDates.index'));
        }

        return view('blocked_dates.edit')->with('blockedDates', $blockedDates);
    }

    /**
     * Update the specified BlockedDates in storage.
     *
     * @param int $id
     * @param UpdateBlockedDatesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlockedDatesRequest $request)
    {
        $blockedDates = $this->blockedDatesRepository->find($id);

        if (empty($blockedDates)) {
            Flash::error(__('messages.not_found', ['model' => __('models/blockedDates.singular')]));

            return redirect(route('blockedDates.index'));
        }

        $blockedDates = $this->blockedDatesRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/blockedDates.singular')]));

        return redirect(route('blockedDates.index'));
    }

    /**
     * Remove the specified BlockedDates from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blockedDates = $this->blockedDatesRepository->find($id);

        if (empty($blockedDates)) {
            Flash::error(__('messages.not_found', ['model' => __('models/blockedDates.singular')]));

            return redirect(route('blockedDates.index'));
        }

        $this->blockedDatesRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/blockedDates.singular')]));

        return redirect(route('blockedDates.index'));
    }
}
