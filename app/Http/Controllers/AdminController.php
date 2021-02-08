<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(){
        $items = DB::table('contacts')->get();
        
        return view('adminDashboard', compact('items'));
    }
}
