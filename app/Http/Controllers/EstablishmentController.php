<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstablishmentRequest;
use App\Http\Requests\UpdateEstablishmentRequest;
use App\Repositories\EstablishmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EstablishmentController extends AppBaseController
{
    /** @var  EstablishmentRepository */
    private $establishmentRepository;

    public function __construct(EstablishmentRepository $establishmentRepo)
    {
        $this->establishmentRepository = $establishmentRepo;
    }

    /**
     * Display a listing of the Establishment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $establishments = $this->establishmentRepository->all();

        return view('establishments.index')
            ->with('establishments', $establishments);
    }

    /**
     * Show the form for creating a new Establishment.
     *
     * @return Response
     */
    public function create()
    {
        return view('establishments.create');
    }

    /**
     * Store a newly created Establishment in storage.
     *
     * @param CreateEstablishmentRequest $request
     *
     * @return Response
     */
    public function store(CreateEstablishmentRequest $request)
    {
        $input = $request->all();

        $establishment = $this->establishmentRepository->create($input);

        Flash::success('Establishment saved successfully.');

        return redirect(route('establishments.index'));
    }

    /**
     * Display the specified Establishment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $establishment = $this->establishmentRepository->find($id);

        if (empty($establishment)) {
            Flash::error('Establishment not found');

            return redirect(route('establishments.index'));
        }

        return view('establishments.show')->with('establishment', $establishment);
    }

    /**
     * Show the form for editing the specified Establishment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $establishment = $this->establishmentRepository->find($id);

        if (empty($establishment)) {
            Flash::error('Establishment not found');

            return redirect(route('establishments.index'));
        }

        return view('establishments.edit')->with('establishment', $establishment);
    }

    /**
     * Update the specified Establishment in storage.
     *
     * @param int $id
     * @param UpdateEstablishmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstablishmentRequest $request)
    {
        //dd($request->toArray());
        $establishment = $this->establishmentRepository->find($id);

        if (empty($establishment)) {
            Flash::error('Establishment not found');

            return redirect(route('establishments.index'));
        }

        $establishment = $this->establishmentRepository->update($request->all(), $id);

        Flash::success('Establishment updated successfully.');

        return redirect(route('establishments.index'));
    }

    /**
     * Remove the specified Establishment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $establishment = $this->establishmentRepository->find($id);

        if (empty($establishment)) {
            Flash::error('Establishment not found');

            return redirect(route('establishments.index'));
        }

        $this->establishmentRepository->delete($id);

        Flash::success('Establishment deleted successfully.');

        return redirect(route('establishments.index'));
    }
}
