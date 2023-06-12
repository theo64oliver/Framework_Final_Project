<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Http\Controlles\MemberProcessController;
    
class CheckInController extends Controller
{
    function init()
    {
        session_start();
        $Member_ID = DB::table('member')->where('email',Auth::user()->email)->value('member_id');
        $res1 = DB::select('SELECT check_in FROM check_in where member_id = ? ORDER BY check_in DESC;',array($Member_ID));
        $_SESSION['Res1'] = $res1;
        #session_destroy();
        return redirect()->route('checkin');
    }
}



