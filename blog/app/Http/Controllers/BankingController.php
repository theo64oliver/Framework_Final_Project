<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
    
class BankingController extends Controller
{
    function init()
    {
        session_start();
        $res1 = DB::select('SELECT currentamount FROM bank_account WHERE bank_id = 1');
        $_SESSION['sum'] = $res1[0]->currentamount;
        return redirect()->route('trainer');
    }
}
