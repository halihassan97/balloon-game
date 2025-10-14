@extends('layouts.admin')

@section('content')
    <div class="content-page">
        <div class="container mt-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Languages</h4>
                <a href="{{ route('admin.languages.create') }}" class="btn btn-primary">Add Language</a>
            </div>

            @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
            @if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>@endif

            <table class="table table-bordered">
                <thead>
                <tr><th>#</th><th>Name</th><th>Code</th><th>Default</th><th>Active</th><th>Actions</th></tr>
                </thead>
                <tbody>
                @foreach($languages as $lang)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $lang->name }}</td>
                        <td>{{ $lang->code }}</td>
                        <td>{!! $lang->is_default ? '<span class="badge bg-success">Yes</span>' : '<span class="badge bg-secondary">No</span>' !!}</td>
                        <td>{!! $lang->active ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Disabled</span>' !!}</td>
                        <td>
                            <a href="{{ route('admin.languages.edit', $lang) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.languages.destroy', $lang) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
