<?php

namespace App\Http\Controllers;

use App\Models\jobsboards;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
        $query = jobsboards::query();
        if (request()->has('category')) {
            $query->where('category', 'LIKE', '%'.request('category').'%' );
        }
        $jobs = $query->paginate(20);
        return view('frontend.views.jobs', compact('jobs'));
    }

    public function show(jobsboards $job) {
        // dd($job);
        return view('frontend.views.job', compact('job'));
    }
}
