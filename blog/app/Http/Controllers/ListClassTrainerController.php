<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Http\Controlles\MemberProcessController;
    
class ListClassTrainerController extends Controller
{
    function init()
    {
        session_start();
        $T_ID = DB::table('teacher')->where('email',Auth::user()->email)->value('teacher_id');
        $res1 = DB::select('select p.name, p.start, p.duration, m.name as member, s.sport_name FROM private_lesson p, sport s, member m, sport_teacher i, teacher t where t.teacher_id = i.teacher_id and i.sport_id = s.sport_id and p.sport_id = s.sport_id and m.member_id = p.member_id and t.teacher_id = ?;
        ',array($T_ID));
        $res2 = DB::select('select p.name, p.start, p.duration, s.sport_name FROM collective_lesson p, sport s, sport_teacher i, teacher t where t.teacher_id = i.teacher_id and i.sport_id = s.sport_id and p.sport_id = s.sport_id and t.teacher_id = ?;
        ',array($T_ID));
        $_SESSION['Res1'] = $res1;
        $_SESSION['Res2'] = $res2;
        #session_destroy();
        return redirect()->route('classlisttrainer');
    }
}



