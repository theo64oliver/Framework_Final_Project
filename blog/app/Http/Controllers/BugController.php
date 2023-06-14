<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
    
class BugController extends Controller
{
    function init(Request $request)
    {
        $Pl_ID = DB::table('private_lesson')->max('p_lesson_id');
        //$Pl_ID = DB::select('SELECT max(P_Lesson_ID) from Private_Lesson');
        $P_Lesson_ID = $Pl_ID +1;
        $Member_ID = DB::table('member')->where('email',Auth::user()->email)->value('member_id');
        $Start = $_POST['Start'];
        $Duration = $_POST['Duration'];
        $Name = $_POST['Name'];
        $Sport_Name = $_POST['Sport_Name'];
        $Sport_ID = DB::table('sport')->where('sport_name',$Sport_Name)->value('sport_id');
        $data=array('p_lesson_id'=>$P_Lesson_ID,"member_id"=>$Member_ID,"start"=>$Start,"duration"=>$Duration,"name"=>$Name,"sport_id"=>$Sport_ID);
        DB::table('private_lesson')->insert($data);
        return redirect()->route('request');
    }
}



