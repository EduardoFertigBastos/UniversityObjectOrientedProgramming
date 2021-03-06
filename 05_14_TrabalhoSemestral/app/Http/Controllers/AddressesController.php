<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;
use App\Models\City;
use Exception;
use PDF;

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

    public function store(Request $request, $aux = 0)
    {
        try {
            $registro = Address::create([
                'cep'          => $request->cep,
                'description'  => $request->description,
                'numberHouse'  => $request->numberHouse,
                'neighborhood' => $request->neighborhood,
                'complement'   => $request->complement,
                'city_id'      => $request->city_id
            ]);

            if ($aux == 0)
                return redirect()->route('addresses.index');
            else
                return $registro;
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

    public function update(Request $request, int $id, $modo = 0)
    {
        try {
            $address = Address::where('id', $id)->update([
                'cep'          => $request->cep,
                'description'  => $request->description,
                'numberHouse'  => $request->numberHouse,
                'neighborhood' => $request->neighborhood,
                'complement'   => $request->complement,
                'city_id'      => $request->city_id
            ]);

            if ($modo == 0)
                return redirect()->route('addresses.index');
            else
                return $address;
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

    public function createPDF() {
        // retreive all records from db
        $data = ['addresses_list' => Address::all()];

        $pdf = PDF::loadView('addresses.pdf', $data);

        return $pdf->download('addresses.pdf');
    }
}
