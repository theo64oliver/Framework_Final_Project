<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
    
class CreateClassController extends Controller
{
    function init(Request $request)
    {
        $Cl_ID = DB::table('collective_lesson')->max('c_lesson_id');
        $C_Lesson_ID = $Cl_ID +1;
        
        $Start = $_POST['Start'];
        $Duration = $_POST['Duration'];
        $NBPart = $_POST['Nbpart'];
        $Name = $_POST['Name'];
        $Sport_Name = $_POST['Sport_Name'];
        $Sport_ID = DB::table('sport')->where('sport_name',$Sport_Name)->value('sport_id');
        
        $data=array('c_lesson_id'=>$C_Lesson_ID,"start"=>$Start,"duration"=>$Duration,"name"=>$Name,"sport_id"=>$Sport_ID, "numer_of_student"=>$NBPart);
        DB::table('collective_lesson')->insert($data);
        
        $SMCl_ID = DB::table('sport_machine_collective_lesson')->max('smcl_id');
        $Machine = $_POST['Machine'];
        $Machines = explode(',', $Machine);
        foreach($Machines as $Machine_ID)
        {
            $SMCl_ID = $SMCl_ID +1;
            $data2=array('smcl_id'=>$SMCl_ID,"lesson_id"=>$C_Lesson_ID,"machine_id"=>$Machine_ID);
            DB::table('sport_machine_collective_lesson')->insert($data2);
        }

        return redirect()->route('createform');
    }
}