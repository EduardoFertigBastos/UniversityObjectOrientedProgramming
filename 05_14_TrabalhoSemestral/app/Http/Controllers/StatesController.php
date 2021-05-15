<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use Exception;

/**
 * Class StatesController.
 *
 * @package namespace App\Http\Controllers;
 */
class StatesController extends Controller
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
            $states_list = State::orderBy('id')->get();

            return view('states.index', compact('states_list'));
        } catch (Exception $e) {
            $e;
        }

    }

    public function create()
    {
        return view('states.create');
    }

    public function store(Request $request)
    {
        try {
            State::create([
                'name'     => $request->name,
                'initials' => $request->initials,
            ]);

            return redirect()->route('states.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function show(int $id)
    {
        try {
            $state = State::find($id);

            return view('states.show', compact('state'));
        } catch (Exception $e) {
            return $e;
        }
    }
    public function edit(int $id)
    {
        try {
            $state = State::find($id);

            return view('states.edit', compact('state'));
        } catch (Exception $e) {
            return $e;
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            State::where('id', $id)->update([
                'name'     => $request->name,
                'initials' => $request->initials,
            ]);

            return redirect()->route('states.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function delete(int $id)
    {
        try {
            State::where('id', $id)->delete();

            return redirect()->route('states.index');
        } catch (Exception $e) {
            return $e;
        }
    }
}
