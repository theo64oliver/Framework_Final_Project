<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
    
class MemberProcessController extends Controller
{
    function init()
    {
        session_start();
        $Member_ID = DB::table('member')->where('email',Auth::user()->email)->value('member_id');
        $res1 = DB::select('SELECT SUM(amount) FROM transaction where member_id = ?;',array($Member_ID));
        $_SESSION['sum'] = $res1[0]->sum;
        return redirect()->route('member');
    }
}



