<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\stations;

use App\Models\news;

use App\Models\gmaps;

use App\Models\feedback;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $stations = stations::all();
                $data = news::all();
                return view('user.home', compact('stations'), compact('data'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        $stations = stations::all();
        return view('user.guest', compact('stations'));
    }

    public function gmaps()
    {
        $gmaps = gmaps::all();
        return view('user.gmaps', compact('gmaps'));
    }

    public function upload_feedbackkkkk(Request $request)
    {
        $feedback = new feedback;
        $feedback->FirstName = $request->FirstName;
        $feedback->LastName = $request->LastName;
        $feedback->Email = $request->Email;
        $feedback->FeedbackCategory = $request->FeedbackCategory;
        $feedback->Number = $request->Number;
        $feedback->FeedbackText = $request->FeedbackText;
        $feedback->save();
        return redirect()->back();
    }
}
