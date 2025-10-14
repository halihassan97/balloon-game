@extends('layouts.app')

@section('title', $blog->meta_title ?? $blog->title)
@section('meta_description'){{ $blog->meta_description ?? '' }}@endsection
@section('meta_keywords'){{ $blog->meta_keywords ?? '' }}@endsection

@section('content')
    <div class="container py-5">
        <div class="max-w-3xl mx-auto bg-white rounded-4 shadow-lg p-4 p-md-5">
            <h1 class="fw-bold mb-3 text-center">{{ $blog->title }}</h1>
            <p class="text-muted text-center mb-4">
                <i class="bi bi-calendar-event"></i>
                {{ optional($blog->published_at)->format('F d, Y') }}
            </p>

            @if($blog->image)
                <div class="text-center mb-4">
                    <img src="{{ asset('storage/'.$blog->image) }}"
                         class="img-fluid rounded-3 shadow-sm"
                         alt="{{ $blog->title }}"
                         style="max-height: 450px; object-fit: cover; transition: transform .3s;">
                </div>
            @endif

            <div class="blog-content fs-5 lh-lg" style="color:#333;">
                {!! $blog->content !!}
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('blogs.index') }}"
                   class="btn btn-outline-dark rounded-pill px-4 py-2 hover-shadow-sm">
                    ← Back to Blog
                </a>
            </div>
        </div>
    </div>

    <style>
        .img-fluid:hover {
            transform: scale(1.03);
        }
        .btn:hover {
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }
    </style>

@endsection
