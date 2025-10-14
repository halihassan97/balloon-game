@extends('layouts.admin')

@section('content')
    <div class="content-page">
        <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Blogs</h4>
            <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add Blog</a>
        </div>

        @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h5 class="card-title mb-0">Basic Datatable</h5>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                                <thead><tr><th>#</th><th>Title</th><th>Status</th><th>Published At</th><th>Actions</th></tr></thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ ucfirst($blog->status) }}</td>
                                        <td>{{ optional($blog->published_at)->format('Y-m-d') }}</td>
                                        <td>
                                            <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                            <a href="{{ route('blogs.show', $blog->slug) }}" class="btn btn-sm btn-info" target="_blank">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



        {{ $blogs->links() }}
    </div>
    </div>
@endsection
