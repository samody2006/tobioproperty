<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = User::all();
       
        return view('admin.dashboard' ,compact('users'));
    }
 
    public function users() {
        $userCount = User::count();
        return view('admin.dashboard', compact('userCount'));
  }
}
