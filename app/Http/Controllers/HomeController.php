<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\stations;

use App\Models\news;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $stations = stations::all();
                $data = news::all();
                return view('user.home' , compact('stations'), compact('data'));
            } 
            else 
            {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }
    
    public function index()
    {
        $stations = stations::all();
        return view('user.guest' , compact('stations'));
    }
}
