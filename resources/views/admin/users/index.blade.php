@extends('layouts.admin')

@section('content')
    <div class="content-page">
        <div class="container mt-5">
            <div class="d-flex justify-content-between">
                <h4 class="mb-3">Users</h4>
                <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Add User</a>
            </div>


        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h5 class="card-title mb-0">Basic Datatable</h5>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <table  id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>#</th><th>Name</th><th>Email</th><th>Admin</th><th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                                        <td>
                                            <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this user?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    </div>
@endsection
