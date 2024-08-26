@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Job List</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td>{{ $job->id }}</td>
                        <td>{{ $job->title }}</td>
                        <td>{{ $job->description }}</td>
                        <td>${{ $job->salary }}</td>
                        <td>
                            <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $jobs->links() }}
    </div>
    
</div>
@endsection
