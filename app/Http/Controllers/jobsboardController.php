<?php

namespace App\Http\Controllers;

use App\Models\jobsboards;    //Add model here
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class jobsboardController extends Controller
{
    public function index()
    {
        $app = jobsboards::all();
        return view('layouts.jobs_board')->with('apps', $app);
    }

    public function create()
    {
        return view('layouts.create_job');
    }

    public function store(Request $req)
    {
        $req->validate([
            'company' => ['required', 'string'],
            'location' => ['required', 'string'],
            'title' => ['required', 'string'],
            'category' => ['required', 'string'],
            'jobd' => ['required', 'string'],
            'qf' => ['required', 'string'],
            'jobt' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'vacancy' => ['required', 'string'],
            'salary' => ['required', 'string'],
            'ad' => ['required', 'string'],
            'joind' => ['required', 'string'],
        ]);

        $user= new jobsboards();
        $user->company =$req->input('company');
        $user->location =$req->input('location');
        $user->title =$req->input('title');
        $user->category =$req->input('category');
        $user->jobd =$req->input('jobd');
        $user->qf =$req->input('qf');
        $user->jobt =$req->input('jobt');
        $user->gender =$req->input('gender');
        $user->vacancy =$req->input('vacancy');
        $user->salary =$req->input('salary');
        $user->ad =$req->input('ad');
        $user->joind =$req->input('joind');
        $user->save();
        return redirect('/jobs_board')->with('success', 'Data Added Successfully!');
    }

    // public function show($id)
    // {
    //     $app = jobsboards::find($id);
    //     return view('layouts.show_job')->with('apps', $app);
    // }

    public function show($id)
    {
        $user = jobsboards::find($id);
        return response()->json([
            'status'=> 200,
            'jobsboards'=> $user,
        ]);
    }

    public function edit($id)
    {
        $job  = jobsboards::find($id);
        // return view('layouts.edit')->with('students', $user);
        return response()->json([
            'status'=> 300,
            'jobsboards'=> $job ,
        ]);
    }

    public function update(Request $req)
    {
        $jobid = $req->input('editid');
        $job = jobsboards::find($jobid);
        $job->company=$req->company;
        $job->location=$req->location;
        $job->title=$req->title;
        $job->category=$req->category;
        $job->jobd=$req->jobd;
        $job->qf=$req->qf;
        $job->jobt=$req->jobt;
        $job->gender=$req->gender;
        $job->vacancy=$req->vacancy;
        $job->salary=$req->salary;
        $job->ad=$req->ad;
        $job->joind=$req->joind;
        $job->save();
        return redirect('job')->with('edit', 'Data Updated Successfully!');
    }

    // public function destroy($id)
    // {
    //     jobsboards::destroy($id);
    //     return redirect('jobs_board')->with('delete', 'Data deleted Successfully!');
    // }

    public function destroy(Request $request)
    {
        $userid = $request->input('delete_id');
        // $userid->id = $request->input('delete_id');
        $user = jobsboards::find($userid);
        $user->delete();
        return redirect('job')->with('delete', 'Data deleted Successfully!');
        // users::destroy($id);
        // return redirect('user')->with('delete', 'Data deleted Successfully!');
    }

    public function checkdelete(Request $request)
    {
        $ids = $request->iddel;
        DB::table("job_portal")->whereIn('id', explode(",", $ids))->delete();
        return redirect('job')->with('delete', 'Data deleted Successfully!');
    }
}
