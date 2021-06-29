<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Coin;
use Exception;
use PDF;

/**
 * Class PurchasesController.
 *
 * @package namespace App\Http\Controllers;
 */
class PurchasesController extends Controller
{

    /**
     * PurchasesController constructor.
     *
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        try {
            $purchases_list = Purchase::orderBy('id')->get();

            return view('purchases.index', compact('purchases_list'));
        } catch (Exception $e) {
            $e;
        }

    }

    public function create()
    {
        $coins_list = Coin::get();

        return view('purchases.create', compact('coins_list'));
    }

    public function store(Request $request)
    {
        try {
            Purchase::create([
                'user_id' => 1,
                'coin_id' => $request->coin_id,
                'amount'  => $request->amount,
                'price'   => $request->price,
            ]);

            return redirect()->route('purchases.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function show(int $id)
    {
        try {
            $purchase = Purchase::find($id);
            return view('purchases.show', compact('purchase'));
        } catch (Exception $e) {
            return $e;
        }
    }
    public function edit(int $id)
    {
        try {
            $purchase     = Purchase::find($id);
            $coins_list = Coin::get();

            return view('purchases.edit', compact('purchase', 'coins_list'));
        } catch (Exception $e) {
            return $e;
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            Purchase::where('id', $id)->update([
                'user_id' => 1,
                'coin_id' => $request->coin_id,
                'amount'  => $request->amount,
                'price'   => $request->price,
            ]);

            return redirect()->route('purchases.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function delete(int $id)
    {
        try {
            Purchase::where('id', $id)->delete();

            return redirect()->route('purchases.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function createPDF() {
        // retreive all records from db
        $data = ['purchases_list' => Purchase::all()];

        $pdf = PDF::loadView('purhcases.pdf', $data);

        return $pdf->download('pdf_purchase.pdf');
    }
}
