<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bought;
use Exception;

/**
 * Class BoughtsController.
 *
 * @package namespace App\Http\Controllers;
 */
class BoughtsController extends Controller
{

    /**
     * BoughtsController constructor.
     *
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        try {
            $boughts_list = Bought::orderBy('id')->get();

            return view('boughts.index', compact('boughts_list'));
        } catch (Exception $e) {
            $e;
        }

    }

    public function create()
    {
        return view('boughts.create');
    }

    public function store(Request $request)
    {
        try {
            Bought::create([
                'name'     => $request->name,
                'initials' => $request->initials,
            ]);

            return redirect()->route('boughts.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function show(int $id)
    {
        try {
            $bought = Bought::find($id);

            return view('boughts.show', compact('bought'));
        } catch (Exception $e) {
            return $e;
        }
    }
    public function edit(int $id)
    {
        try {
            $bought = Bought::find($id);

            return view('boughts.edit', compact('bought'));
        } catch (Exception $e) {
            return $e;
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            Bought::where('id', $id)->update([
                'name'     => $request->name,
                'initials' => $request->initials,
            ]);

            return redirect()->route('boughts.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function delete(int $id)
    {
        try {
            Bought::where('id', $id)->delete();

            return redirect()->route('boughts.index');
        } catch (Exception $e) {
            return $e;
        }
    }
}
