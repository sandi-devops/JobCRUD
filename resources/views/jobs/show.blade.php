<!-- resources/views/jobs/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Job Details</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $job->title }}</h5>
        <p class="card-text">{{ $job->description }}</p>
        <p class="card-text"><strong>Salary:</strong> ${{ $job->salary }}</p>
        <a href="{{ route('jobs.index') }}" class="btn btn-primary">Back to Job List</a>
    </div>
</div>
@endsection
