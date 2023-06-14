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

        $_SESSION['sum'] = 999;
        return redirect()->route('banking');
    }
}
