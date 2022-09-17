<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\AboutCompany;    //Add model here
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use DB;

// use Session;

class AboutCompanyController extends Controller
{
    public function index()
    {
        $user = AboutCompany::all();
        return view('layouts.About_Us')->with('students', $user);
    }
    // public function index2()
    // {
    //     $user = users::all();
    //     return view ('layouts.jobs_board')->with('students', $user);
    // }

    public function create()
    {
        return view('layouts.create_info');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required',  'min:11'],
            'type' => ['required', 'string',],
            'address' => ['required', 'string',],
        ]);

        $user= new AboutCompany();
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->phone=$req->input('phone');
        $user->type=$req->input('type');
        $user->address=$req->input('address');
        $user->save();
        return redirect('About_US')->with('success', 'Data Added Successfully!');
    }

    // public function show($id)
    // {
    //     // $user = users::find($id);
    //     $user = users::where('id', $id)->first();
    //     return view('layouts.show')->with('students', $user);
    // }
    public function show($id)
    {
        $user = AboutCompany::find($id);
        return response()->json([
            'status'=> 200,
            'AboutCompany'=> $user,
        ]);
    }

    // public function edit($id)
    // {
    //     $user = users::find($id);
    //     // return view('layouts.edit')->with('students', $user);
    //     return response()->json([
    //         'status'=> 200,
    //         'users'=> $user,
    //     ]);
    // }


    // public function update(Request $req, $id)
    // {
    //     $user = users::where('id', $id)->first();
    //     // $input = users::find($id);
    //     //$input = $req->all();
    //     $user->name=$req->name;
    //     $user->email=$req->email;
    //     $user->password=Hash::make($req->input('password'));
    //     $user->is_admin=$req->is_admin;
    //     $user->save();
    //     return redirect('user')->with('edit', 'Data Updated Successfully!');
    // }

    public function edit($id)
    {
        $user = AboutCompany::find($id);
        // return view('layouts.edit')->with('students', $user);
        return response()->json([
            'status'=> 200,
            'AboutCompany'=> $user,
        ]);
    }


    public function update(Request $req)
    {
        $userid = $req->input('editid');
        $user = AboutCompany::find($userid);
        $user->name=$req->name;
        $user->email=$req->email;
        $user->phone=$req->phone;
        $user->type=$req->type;
        $user->address=$req->address;

        $user->save();
        return redirect('About_US')->with('edit', 'Data Updated Successfully!');
    }

    // public function destroy($id)
    // {
    //     users::destroy($id);
    //     return redirect('user')->with('delete', 'Data deleted Successfully!');
    // }

    public function destroy(Request $request)
    {
        $userid = $request->input('delete_id');
        $user = AboutCompany::find($userid);
        $user->delete();
        return redirect('About_US')->with('delete', 'Data deleted Successfully!');
    }

    public function checkdelete(Request $request)
    {
        $ids = $request->iddel;
        AboutCompany::whereIn('id', explode(",", $ids))->delete();
        return redirect('About_US')->with('delete', 'Data deleted Successfully!');
    }
}
