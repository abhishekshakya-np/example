<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{
    /**
     * Display a listing of jobs.
     */
    public function index(): View
    {
        $jobs = Job::with('employer')->get();

        return view('jobs', [
            'jobs' => $jobs
        ]);
    }

    /**
     * Display the specified job.
     */
    public function show(Job $job): View
    {
        // Load the employer relationship
        $job->load('employer');

        return view('job', [
            'job' => $job
        ]);
    }
}
