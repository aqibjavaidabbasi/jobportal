<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;    //Add model here
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class userdashboardController extends Controller
{
    //
    public function index()
    {
        return view('user.home');
    }

    // public function show($id)
    // {
    //     $user = users::find($id);
    //     return response()->json([
    //         'status'=> 200,
    //         'users'=> $user,
    //     ]);

    //     // // $user = users::find($id);
    //     // $user = users::where('id', $id)->first();
    //     // return view('layouts.show')->with('students', $user);
    // }

    // public function edit($id)
    // {
    //     $user = users::find($id);
    //     // return view('layouts.edit')->with('students', $user);
    //     return response()->json([
    //         'status'=> 200,
    //         'users'=> $user,
    //     ]);
    // }


    // public function update(Request $req)
    // {
    //     $userid = $req->input('editid');
    //     $user = users::find($userid);
    //     $user->name=$req->name;
    //     $user->email=$req->email;
    //     $user->password=Hash::make($req->input('password'));
    //     $user->is_admin=$req->is_admin;
    //     $user->save();
    //     return redirect('user')->with('edit', 'Data Updated Successfully!');
    // }

    // public function destroy(Request $request)
    // {
    //     $userid = $request->input('delete_id');
    //     // $userid->id = $request->input('delete_id');
    //     $user = users::find($userid);
    //     $user->delete();
    //     return redirect('user')->with('delete', 'Data deleted Successfully!');
    //     // users::destroy($id);
    //     // return redirect('user')->with('delete', 'Data deleted Successfully!');
    // }
}
