<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coin;
use Exception;

/**
 * Class CoinsController.
 *
 * @package namespace App\Http\Controllers;
 */
class CoinsController extends Controller
{

    /**
     * CoinsController constructor.
     *
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        try {
            $coins_list = Coin::orderBy('id')->get();

            return view('coins.index', compact('coins_list'));
        } catch (Exception $e) {
            $e;
        }
    }

    public function create()
    {
        return view('coins.create');
    }

    public function store(Request $request)
    {
        try {
            Coin::create([
                'name'     => $request->name
            ]);

            return redirect()->route('coins.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function show(int $id)
    {
        try {
            $coin = Coin::find($id);

            return view('coins.show', compact('coin'));
        } catch (Exception $e) {
            return $e;
        }
    }
    public function edit(int $id)
    {
        try {
            $coin = Coin::find($id);

            return view('coins.edit', compact('coin'));
        } catch (Exception $e) {
            return $e;
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            Coin::where('id', $id)->update([
                'name'     => $request->name
            ]);

            return redirect()->route('coins.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function delete(int $id)
    {
        try {
            Coin::where('id', $id)->delete();

            return redirect()->route('coins.index');
        } catch (Exception $e) {
            return $e;
        }
    }
}
