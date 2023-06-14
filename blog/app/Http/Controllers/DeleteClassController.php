<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
    
class DeleteClassController extends Controller
{
    function init(Request $request)
    {
        $CL_ID = $_POST['Class_ID'];
        $query = DB::table('sport_machine_collective_lesson')->where('lesson_id', $CL_ID)->delete();
        $query2 = DB::table('collective_lesson')->where('c_lesson_id', $CL_ID)->delete();

        return redirect()->route('delform');
    }
}