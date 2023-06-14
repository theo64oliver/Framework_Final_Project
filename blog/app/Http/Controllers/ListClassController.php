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
        $res2 = DB::select('SELECT p.name as name, p.start as start, p.duration as duration, s.sport_name as sport_name FROM collective_lesson p, sport s, member_collective m where p.sport_id = s.sport_id and m.c_lesson_id = p.c_lesson_id and m.member_id = ?;
        ',array($Member_ID));
        $_SESSION['Res1'] = $res1;
        $_SESSION['Res2'] = $res2;
        #session_destroy();
        return redirect()->route('classlist');
    }
}



