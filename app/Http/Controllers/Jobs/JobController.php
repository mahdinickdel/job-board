<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Province;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $titleFilter = $request->input('q');
        
        $jobs = Job::with(['province', 'city', 'category'])
        ->when($titleFilter, function ($q) use ($titleFilter) {
            $q->where('title', 'like', '%' . $titleFilter . '%');
        })
        ->orderBy('id', 'desc')->paginate()->withQueryString();

        $provinces = Province::orderBy('name', 'asc')->get();
        
        return view('jobs.index', compact('jobs', 'provinces'));
    }

    public function single($id)
    {
        $job = Job::with(['province', 'city', 'category', 'comments', 'user'])->findOrFail($id);
        return view('jobs.single', compact('job'));
    }
}
