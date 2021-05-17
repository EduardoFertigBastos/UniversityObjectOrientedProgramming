<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;
use App\Models\City;
use Exception;

/**
 * Class AddressesController.
 *
 * @package namespace App\Http\Controllers;
 */
class AddressesController extends Controller
{
    /**
     * StatesController constructor.
     *
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        try {
            $addresses_list = Address::orderBy('id')->get();

            return view('addresses.index', compact('addresses_list'));
        } catch (Exception $e) {
            return $e;
        }

    }

    public function create()
    {
        $cities_list = City::orderBy('id')->get();

        return view('addresses.create', compact('cities_list'));
    }

    public function store(Request $request)
    {
        try {
            Address::create([
                'cep'          => $request->cep,
                'description'  => $request->description,
                'numberHouse'  => $request->numberHouse,
                'neighborhood' => $request->neighborhood,
                'complement'   => $request->complement,
                'city_id'      => $request->city_id
            ]);

            return redirect()->route('addresses.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function show(int $id)
    {
        try {
            $address = Address::find($id);

            return view('addresses.show', compact('address'));
        } catch (Exception $e) {
            return $e;
        }
    }
    public function edit(int $id)
    {
        try {
            $address = Address::find($id);
            $cities_list = City::orderBy('id')->get();

            return view('addresses.edit', compact('address', 'cities_list'));
        } catch (Exception $e) {
            return $e;
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            Address::where('id', $id)->update([
                'cep'          => $request->cep,
                'description'  => $request->description,
                'numberHouse'  => $request->numberHouse,
                'neighborhood' => $request->neighborhood,
                'complement'   => $request->complement,
                'city_id'      => $request->city_id
            ]);

            return redirect()->route('addresses.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function delete(int $id)
    {
        try {
            Address::where('id', $id)->delete();

            return redirect()->route('addresses.index');
        } catch (Exception $e) {
            return $e;
        }
    }
}
