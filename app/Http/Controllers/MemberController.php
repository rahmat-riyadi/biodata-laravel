<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    
    public function index(){
        return view('index', ['members' => Member::all()]);
    }

    public function show(Member $member){
        return view('detail', ['member' => $member]);
    }

}
