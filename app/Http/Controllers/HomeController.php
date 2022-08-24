<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Session;

use Auth;

class HomeController extends Controller
{

    
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
  

}
 