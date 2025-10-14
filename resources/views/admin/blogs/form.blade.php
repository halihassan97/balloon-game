@extends('layouts.admin')

@section('content')
    <div class="content-page">
        <div class="container mt-5">
        <h4 class="mb-3">{{ $blog->exists ? 'Edit Blog' : 'Add Blog' }}</h4>

        <form action="{{ $blog->exists ? route('admin.blogs.update', $blog) : route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($blog->exists) @method('PUT') @endif

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                @error('title')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Slug (optional)</label>
                <input name="slug" class="form-control" value="{{ old('slug', $blog->slug) }}" placeholder="custom-slug-or-leave-empty">
                <small class="text-muted">Leave empty to auto-generate from title.</small>
                @error('slug')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Excerpt</label>
                <input name="excerpt" class="form-control" value="{{ old('excerpt', $blog->excerpt) }}">
                @error('excerpt')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea id="content" name="content" class="form-control" rows="10">{{ old('content', $blog->content) }}</textarea>
                @error('content')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Image</label>
                @if($blog->image)
                    <div class="mb-2"><img src="{{ asset('storage/' . $blog->image) }}" style="max-width:200px" alt=""></div>
                @endif
                <input type="file" name="image" class="form-control">
                @error('image')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select" required>
                    <option value="draft" {{ old('status', $blog->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $blog->status) === 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Published At</label>
                <input
                    type="datetime-local"
                    name="published_at"
                    class="form-control"
                    value="{{ old('published_at', $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('Y-m-d\TH:i') : '') }}"
                >

            </div>

            <hr>
            <h6>SEO Meta</h6>

            <div class="mb-3">
                <label class="form-label">Meta Title</label>
                <input name="meta_title" class="form-control" value="{{ old('meta_title', $blog->meta_title) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Meta Description</label>
                <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description', $blog->meta_description) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Meta Keywords (comma separated)</label>
                <input name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $blog->meta_keywords) }}">
            </div>

            <button class="btn btn-primary">{{ $blog->exists ? 'Update' : 'Publish' }}</button>
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
    </div>
    <script>
        CKEDITOR.replace( 'content' );
    </script>

{{--    --}}{{-- TinyMCE CDN simple init --}}
{{--    <script src="https://cdn.tiny.cloud/1/wnthfi7i9jza8njpdqi3w2dc7flbz475takek622jsl7b0sz/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>--}}
{{--    <script>--}}
{{--        document.addEventListener('DOMContentLoaded', function(){--}}
{{--            tinymce.init({--}}
{{--                selector:'#content',--}}
{{--                height: 400,--}}
{{--                menubar: false,--}}
{{--                plugins: ['link','lists','autolink','table','code','image'],--}}
{{--                toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright | bullist numlist | link | table | code',--}}
{{--                relative_urls: false,--}}
{{--                remove_script_host: false,--}}
{{--                convert_urls: true--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
