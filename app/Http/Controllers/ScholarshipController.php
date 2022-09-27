<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\scholarships;    //Add model here
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use DB;

// use Session;

class ScholarshipController extends Controller
{
    public function index()
    {
        $user = scholarships::all();
        return view('layouts.scholar')->with('students', $user);
    }

    public function list()
    {
        $scholarships = scholarships::paginate(20);
        return view('frontend.views.scholarships.index')->with('scholarships', $scholarships);
    }

    public function scholarship($id) {
        $scholarship = scholarships::find($id);
        return view('frontend.views.scholarships.show')->with('scholarship', $scholarship);
    }

    public function create()
    {
        return view('layouts.create_scholarships');
    }

    public function store(Request $req)
    {
        $req->validate([
            'title' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'field' => ['required', 'string'],
            'description' => ['required', 'string'],
            'NOS' => ['required', 'string'],
            'tg' => ['required', 'string',],
            'inclusions' => ['required', 'string'],
            'eligibility' => ['required', 'string'],
            'instructions' => ['required', 'string'],
            'deadline' => ['required', 'string'],
            'joining_date' => ['required', 'string'],
            'address' => ['required', 'string'],

        ]);

        $user= new scholarships();
        $user->title=$req->input('title');
        $user->name=$req->input('name');
        $user->field=$req->input('field');
        $user->description=$req->input('description');
        $user->NOS=$req->input('NOS');
        $user->tg=$req->input('tg');
        $user->inclusions=$req->input('inclusions');
        $user->eligibility=$req->input('eligibility');
        $user->instructions=$req->input('instructions');
        $user->deadline=$req->input('deadline');
        $user->joining_date=$req->input('joining_date');
        $user->address=$req->input('address');

        $user->save();
        return redirect('scholarships')->with('success', 'Data Added Successfully!');
    }

    public function show($id)
    {
        $user = scholarships::find($id);
        return response()->json([
            'status'=> 200,
            'scholarships'=> $user,
        ]);
    }

    public function edit($id)
    {
        $user = scholarships::find($id);
        return response()->json([
            'status'=> 200,
            'scholarships'=> $user,
        ]);
    }


    public function update(Request $req)
    {
        $userid = $req->input('editid');
        $user = scholarships::find($userid);
        $user->title=$req->title;
        $user->name=$req->name;
        $user->field=$req->field;
        $user->description=$req->description;
        $user->NOS=$req->NOS;
        $user->tg=$req->tg;
        $user->inclusions=$req->inclusions;
        $user->eligibility=$req->eligibility;
        $user->instructions=$req->instructions;
        $user->deadline=$req->deadline;
        $user->joining_date=$req->joining_date;
        $user->address=$req->address;
        $user->save();
        return redirect('scholarships')->with('edit', 'Data Updated Successfully!');
    }

    public function destroy(Request $request)
    {
        $userid = $request->input('delete_id');
        $user = scholarships::find($userid);
        $user->delete();
        return redirect('scholarships')->with('delete', 'Data deleted Successfully!');
    }

    public function checkdelete(Request $request)
    {
        $ids = $request->iddel;
        scholarships::whereIn('id', explode(",", $ids))->delete();
        return redirect('scholarships')->with('delete', 'Data deleted Successfully!');
    }
}
