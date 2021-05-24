<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Purchase;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    public function index()
    {
        $total_list = DB::select('SELECT coins.id                                AS "coin_id",
                                         coins.name                              AS "coin_name",
                                         sum(purchases.amount * purchases.price) AS "soma"
                                    FROM purchases
                                    JOIN coins ON
                                            coins.id = purchases.coin_id
                                   GROUP BY coins.id, coins.name');

        return view('dashboard.index', compact('total_list'));
    }

    public function purchasesPerCoins($coin_id)
    {
        $purchases_list = Purchase::where('coin_id', $coin_id)->get();

        return view('dashboard.purchasePerCoin', compact('purchases_list'));
    }
}
