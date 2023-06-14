<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    
    function init()
    {
        /*
        $Pl_ID = DB::table('Private_Lesson')->max('P_Lesson_ID');
        $P_Lesson_ID = $Pl_ID +1;
        $Member_ID = DB::table('member')->where('email',Auth::user()->email)->value('member_id');
        $Start = $_POST['Start'];
        $Duration = $_POST['Duration'];
        $Name = $_POST['Name'];
        $Sport_Name = $_POST['Sport_Name'];
        $Sport_ID = DB::table('Sport')->where('Sport_Name',$Sport_Name)->value('Sport_ID');
        $data=array('P_Lesson_ID'=>$P_Lesson_ID,"Member_ID"=>$Member_ID,"Start"=>$Start,"Duration"=>$Duration,"Name"=>$Name,"Sport_ID"=>$Sport_ID);
        DB::table('Private_Lesson')->insert($data);*/
        return redirect()->route('request');
    }

}