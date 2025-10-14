@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 fw-bold text-center">Latest Blog Posts</h2>

        <div class="row g-4">
            @foreach($blogs as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 blog-card">
                        @if($post->image)
                            <img src="{{ asset('storage/'.$post->image) }}"
                                 class="card-img-top"
                                 alt="{{ $post->title }}"
                                 style="height: 220px; object-fit: cover;">
                        @endif

                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <small class="text-muted">
                                    {{ optional($post->published_at)->format('M d, Y') }}
                                </small>
                            </div>

                            <h5 class="card-title">
                                <a href="{{ route('blogs.show', $post->slug) }}"
                                   class="text-decoration-none text-dark">
                                    {{ Str::limit($post->title, 60) }}
                                </a>
                            </h5>

                            <p class="card-text text-muted flex-grow-1">
                                {{ Str::limit(strip_tags($post->content), 100) }}
                            </p>

                            <a href="{{ route('blogs.show', $post->slug) }}"
                               class="btn btn-primary btn-sm mt-2 align-self-start">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5">
            {{ $blogs->links() }}
        </div>
    </div>

    <style>
        .blog-card {
            transition: all 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
        }
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        .blog-card .card-title a:hover {
            color: #0d6efd;
        }
    </style>

@endsection
