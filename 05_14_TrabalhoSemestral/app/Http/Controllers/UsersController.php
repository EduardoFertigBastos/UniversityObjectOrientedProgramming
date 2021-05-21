<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;
use App\Models\State;
use App\Models\User;
use Exception;

/**
 * Class UsersController.
 *
 * @package namespace App\Http\Controllers;
 */
class UsersController extends Controller
{
    /**
     * UsersController constructor.
     *
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        try {
            $users_list = User::orderBy('id')->get();

            return view('users.index', compact('users_list'));
        } catch (Exception $e) {
            return $e;
        }

    }

    public function create()
    {
        $states_list = State::orderBy('id')->get();

        return view('users.create', compact('states_list'));
    }

    public function store(Request $request)
    {
        try {
            User::create([
                'name'       => $request->name,
                'birth'      => $request->birth,
                'address_id' => $request->address_id,
                'gender'     => $request->gender,
                'cpf'        => $request->cpf,
                'email'      => $request->email,
                'password'   => $request->password
            ]);

            return redirect()->route('users.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function show(int $id)
    {
        try {
            $user = User::find($id);
            $states_list = State::orderBy('name')->get();

            return view('users.show', compact('user', 'states_list'));
        } catch (Exception $e) {
            return $e;
        }
    }
    public function edit(int $id)
    {
        try {
            $user = User::find($id);
            $states_list = State::orderBy('name')->get();

            return view('users.edit', compact('user', 'states_list'));
        } catch (Exception $e) {
            return $e;
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            User::where('id', $id)->update([
                'name'       => $request->name,
                'birth'      => $request->birth,
                'address_id' => $request->address_id,
                'gender'     => $request->gender,
                'cpf'        => $request->cpf,
                'email'      => $request->email,
                'password'   => $request->password
            ]);

            return redirect()->route('users.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function delete(int $id)
    {
        try {
            User::where('id', $id)->delete();

            return redirect()->route('users.index');
        } catch (Exception $e) {
            return $e;
        }
    }
}
