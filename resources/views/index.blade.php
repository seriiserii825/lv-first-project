@extends('layouts.front')
@section('content')
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-6">
                            <!-- Featured blog post-->
                            <div class="card mb-4">
                                <a href="{{ route('posts.show', $post->id) }}">
                                    <img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg"
                                        alt="..." />
                                </a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ date('d-m-Y', strtotime($post->created_at)) }}</div>
                                    <h2 class="card-title">{{ $post->title }}</h2>
                                    <p class="card-text">{{ $post->text }}</p>
                                    <a class="btn btn-primary" href="{{ route('posts.show', $post->id) }}">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-unstyled mb-0">
                                    @foreach ($categories as $category)
                                        <li><a
                                                href="{{ route('home') }}?category_id={{ $category->id }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
