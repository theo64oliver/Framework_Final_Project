<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Http\Controlles\MemberProcessController;
    
class ListClassController extends Controller
{
    function init()
    {
        session_start();
        $Member_ID = DB::table('member')->where('email',Auth::user()->email)->value('member_id');
        $res1 = DB::select('SELECT name, start, duration, sport_id FROM private_lesson where member_id = ?;',array($Member_ID));
        $res2 = array();
        foreach($res1 as $i)
        {
            $res2[] = DB::select('SELECT sport_name FROM sport WHERE sport_id = ?',array($i->sport_id));
        }
        $_SESSION['Res1'] = $res1;
        $_SESSION['Res2'] = $res2;
        #session_destroy();
        return redirect()->route('classlist');
    }
}



