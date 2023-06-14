<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Http\Controlles\MemberProcessController;
    
class ListMachineController extends Controller
{
    function init()
    {
        session_start();
        $res1 = DB::select('select b.name, b.supplier, b.price, s.last_maintenance, s.date_of_purchace FROM sport_machine s, base_machine b where b.base_machine_id = s.base_machine_id;
        ');
        $_SESSION['Res1'] = $res1;
        #session_destroy();
        return redirect()->route('machinelist');
    }
}



