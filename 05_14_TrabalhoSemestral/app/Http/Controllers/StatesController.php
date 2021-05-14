<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\StateCreateRequest;
use App\Http\Requests\StateUpdateRequest;
use App\Repositories\StateRepository;
use App\services\StateService;

/**
 * Class StatesController.
 *
 * @package namespace App\Http\Controllers;
 */
class StatesController extends Controller
{
    /**
     * @var StateRepository
     */
    protected $repository;

    /**
     * @var StateService
     */
    protected $service;

    /**
     * StatesController constructor.
     *
     * @param StateRepository $repository
     * @param StateService $service
     */
    public function __construct(StateRepository $repository, StateService $service)
    {
        $this->repository = $repository;
        $this->service  = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states_list = $this->repository->listPatternTable();

        return view('states.index', [
            'states_list' => $states_list
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StateCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(StateCreateRequest $request)
    {
        try {
            $state = $this->service->store($request->all());

            $response = [
                'message' => 'State created.',
                'data'    => $state,
            ];

            return redirect()->route('states.index')->with($response);

        } catch (ValidatorException $e) {

            return redirect()->route('states.index')->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $state       = $this->repository->find($id);
        $states_list = $this->repository->listPatternTable();

        return view('states.show', [
            'state'       => $state,
            'states_list' => $states_list
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $state       = $this->repository->find($id);
        $states_list = $this->repository->listPatternTable();

        return view('states.edit', [
            'state'       => $state,
            'states_list' => $states_list,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StateUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(StateUpdateRequest $request, $id)
    {
        try {
            $request = $this->service->update($request->all(), $id);

            $response = [
                'message' => 'Estado atualizado.',
                'data'    => $request,
            ];

            return redirect()->route('states.index')->with($response);
        } catch (ValidatorException $e) {
            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->service->delete($id);

        $response = [
            'message' => 'Estado deletado.',
            'id'      => $id,
        ];

        return redirect()->route('states.index');
    }
}
