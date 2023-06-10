<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
    
class MemberProcessController extends Controller
{
    public $Member_ID;
    function init()
    {
        session_start();
        $Member_ID = DB::table('member')->where('email',Auth::user()->email)->value('member_id');
        $_SESSION['ID'] = $Member_ID;
        return redirect()->route('member');
    }
}



