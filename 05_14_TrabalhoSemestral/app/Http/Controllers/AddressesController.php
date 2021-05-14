<?php

namespace App\Http\Controllers;

use App\Entities\City;
use Illuminate\Http\Request;
use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\AddressCreateRequest;
use App\Http\Requests\AddressUpdateRequest;
use App\Repositories\AddressRepository;
use App\Repositories\CityRepository;
use App\Validators\AddressValidator;
use App\Services\AddressService;

/**
 * Class AddressesController.
 *
 * @package namespace App\Http\Controllers;
 */
class AddressesController extends Controller
{
    /**
     * @var AddressRepository
     */
    protected $repository;

    /**
     * @var AddressValidator
     */
    protected $validator;

    /**
     * AddressesController constructor.
     *
     * @param AddressRepository $repository
     * @param AddressService $service
     */
    public function __construct(AddressRepository $repository, AddressService $service)
    {
        $this->repository       = $repository;
        $this->service          = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses_list = $this->repository->listPatternTable();
        $cities_list    = $this->repository->citiesPatternSelect();

        return view('addresses.index', [
            'addresses_list' => $addresses_list,
            'cities_list'    => $cities_list,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AddressCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(AddressCreateRequest $request)
    {
        try {
            $address = $this->service->store($request->all());

            $response = [
                'message' => 'Endereço registrado.',
                'data'    => $address,
            ];

            return redirect()->route('addresses.index')->with($response);
        } catch (ValidatorException $e) {

            return redirect()->route('addresses.index')->withErrors($e->getMessageBag())->withInput();
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
        $address        = $this->repository->find($id);
        $addresses_list = $this->repository->listPatternTable();

        return view('addresses.show', [
            'address'         => $address,
            'addresses_list'  => $addresses_list,
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
        $address     = $this->repository->find($id);
        $addresses   = $this->repository->listPatternTable();
        $cities_list = $this->repository->citiesPatternSelect();

        return view('addresses.edit', [
            'address'         => $address,
            'addresses_list'  => $addresses,
            'cities_list'     => $cities_list,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AddressUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(AddressUpdateRequest $request, $id)
    {
        try {
            $request = $this->service->update($request->all(), $id);

            $response = [
                'message' => 'Endereço atualizado.',
                'data'    => $request,
            ];

            return redirect()->route('addresses.index')->with($response);
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

        return redirect()->route('addresses.index');
    }
}
