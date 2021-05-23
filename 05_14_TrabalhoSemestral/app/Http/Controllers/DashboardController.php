<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view('index', compact('total_list'));
    }
}
