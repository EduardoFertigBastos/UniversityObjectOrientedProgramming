<?php

namespace App\Http\Controllers;

use App\Entities\State;
use Illuminate\Http\Request;
use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CityCreateRequest;
use App\Http\Requests\CityUpdateRequest;
use App\Repositories\CityRepository;
use App\Repositories\StateRepository;
use App\Validators\CityValidator;
use App\Services\CityService;

/**
 * Class CitiesController.
 *
 * @package namespace App\Http\Controllers;
 */
class CitiesController extends Controller
{
    /**
     * @var CityRepository
     */
    protected $repository;

    /**
     * @var CityValidator
     */
    protected $validator;

    /**
     * CitiesController constructor.
     *
     * @param CityRepository $repository
     * @param CityService $service
     */
    public function __construct(CityRepository $repository, CityService $service)
    {
        $this->repository      = $repository;
        $this->service         = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities_list = $this->repository->listPatternTable();
        $states_list = $this->repository->statesPatternSelect();

        return view('cities.index', [
            'cities_list' => $cities_list,
            'states_list'  => $states_list,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CityCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CityCreateRequest $request)
    {
        try {            
            $City = $this->service->store($request->all());
            
            $response = [
                'message' => 'Cidade registrada.',
                'data'    => $City,
            ];

            return redirect()->route('cities.index')->with($response);
        } catch (ValidatorException $e) {

            return redirect()->route('cities.index')->withErrors($e->getMessageBag())->withInput();
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
        $city        = $this->repository->find($id);
        $cities_list = $this->repository->listPatternTable();

        return view('cities.show', [
            'city'        => $city,
            'cities_list' => $cities_list,
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
        $city        = $this->repository->find($id);
        $cities_list = $this->repository->listPatternTable();
        $states_list = $this->repository->statesPatternSelect();

        return view('cities.edit', [
            'city'        => $city,
            'cities_list' => $cities_list,
            'states_list' => $states_list,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CityUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(CityUpdateRequest $request, $id)
    {
        try {
            $request = $this->service->update($request->all(), $id);

            $response = [
                'message' => 'Cidade atualizada.',
                'data'    => $request,
            ];

            return redirect()->route('cities.index')->with($response);
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
            'message' => 'Endereço deletado.',
            'id'      => $id,
        ];

        return redirect()->route('cities.index');
    }
}
