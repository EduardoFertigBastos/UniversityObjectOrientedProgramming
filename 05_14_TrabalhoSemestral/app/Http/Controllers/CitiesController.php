<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\State;
use Exception;

/**
 * Class CitiesController.
 *
 * @package namespace App\Http\Controllers;
 */
class CitiesController extends Controller
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
            $cities_list = City::orderBy('id')->get();

            return view('cities.index', compact('cities_list'));
        } catch (Exception $e) {
            return $e;
        }

    }

    public function create()
    {
        $states_list = State::orderBy('id')->get();

        return view('cities.create', compact('states_list'));
    }

    public function store(Request $request)
    {
        try {
            City::create([
                'name'     => $request->name,
                'state_id' => $request->state_id,
            ]);

            return redirect()->route('cities.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function show(int $id)
    {
        try {
            $city = City::find($id);

            return view('cities.show', compact('city'));
        } catch (Exception $e) {
            return $e;
        }
    }
    public function edit(int $id)
    {
        try {
            $city = City::find($id);
            $states_list = State::orderBy('id')->get();

            return view('cities.edit', compact('city', 'states_list'));
        } catch (Exception $e) {
            return $e;
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            City::where('id', $id)->update([
                'name'     => $request->name,
                'state_id' => $request->state_id,
            ]);

            return redirect()->route('cities.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function delete(int $id)
    {
        try {
            City::where('id', $id)->delete();

            return redirect()->route('cities.index');
        } catch (Exception $e) {
            return $e;
        }
    }
}
