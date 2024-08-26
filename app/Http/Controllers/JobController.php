<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $jobs = Job::all();
    return view('jobs.index', compact('jobs'));
}

public function create()
{
    return view('jobs.create');
}

public function store(Request $request)
{
    $job = Job::create($request->all());
    return redirect()->route('jobs.index');
}

public function show($id)
{
    $job = Job::findOrFail($id);
    return view('jobs.show', compact('job'));
}

public function edit($id)
{
    $job = Job::findOrFail($id);
    return view('jobs.edit', compact('job'));
}

public function update(Request $request, $id)
{
    $job = Job::findOrFail($id);
    $job->update($request->all());
    return redirect()->route('jobs.index');
}

public function destroy($id)
{
    $job = Job::findOrFail($id);
    $job->delete();
    return redirect()->route('jobs.index');
}

}
