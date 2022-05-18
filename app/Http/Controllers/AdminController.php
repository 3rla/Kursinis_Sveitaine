<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\stations;

use App\Models\news;

use App\Models\User;

class AdminController extends Controller
{

    // NEWS FUNCTIONS

    public function add_news()
    {
        return view('admin.add_news');
    }

    public function upload_news(Request $request)
    {
        $news = new news;

        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('upload_newws', $imagename);
        $news->image = $imagename;

        $news->TopLabelText = $request->TopLabelText;
        $news->Description = $request->Description;
        $news->save();
        return redirect()->back();
    }

    public function edit_news()
    {
        $data = news::all();
        return view('admin.edit_news', compact('data'));
    }

    public function delete_news($id)
    {
        $data = news::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_news($id)
    {
        $data = news::find($id);
        return view('admin.update_news', compact('data'));
    }

    public function EditNewsInDB($id, Request $request)
    {
        $data = news::find($id);
        $data->TopLabelText = $request->TopLabelText;
        $data->Description = $request->Description;
        $image = $request->file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('upload_newws', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back();
    }

    //EV POPULAR STATIONS FUNCTIONS

    public function add_popular_view()
    {
        return view('admin.add_popular');
    }

    public function upload_popular(Request $request)
    {
        $stations = new stations;

        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('popularimages', $imagename);
        $stations->image = $imagename;

        $stations->gatve = $request->gatve;
        $stations->miestas = $request->miestas;
        $stations->save();

        return redirect()->back()->with('message', 'Popular charging stations added successfully');
    }

    public function showstations()
    {
        $data = stations::all();
        return view('admin.showstations', compact('data'));
    }

    public function deletestation($id)
    {
        $data = stations::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatestation($id)
    {
        $data = stations::find($id);
        return view('admin.update_station', compact('data'));
    }

    public function editstation($id, Request $request)
    {
        $data = stations::find($id);
        $data->gatve = $request->gatve;
        $data->miestas = $request->miestas;
        $image = $request->file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('popularimages', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back();
    }

    //USER LIST FUNCTIONS

    public function user_list()
    {
        $data = user::all();
        return view('admin.user_list' , compact('data'));
    }

    public function delete_user($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function edit_user_data($id)
    {
        $data = user::find($id);
        return view('admin.update_station', compact('data'));
    }

    public function update_user_data($id, Request $request)         //user edit
    {
        $data = user::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        return redirect()->back();
    }

    // public function editstation($id, Request $request)
    // {
    //     $data = stations::find($id);
    //     $data->gatve = $request->gatve;
    //     $data->miestas = $request->miestas;
    //     $image = $request->file;
    //     if ($image) {
    //         $imagename = time() . '.' . $image->getClientOriginalExtension();
    //         $request->file->move('popularimages', $imagename);
    //         $data->image = $imagename;
    //     }
    //     $data->save();
    //     return redirect()->back();
    // }

    // public function search()
    // {
    //     $search_text=$_GET['query'];
    //     $users = User::where('id',$search_text)->get();

    //     return view('admin.user_list', compact('users'));
    // }
}
