@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="page-header">
        <h3>Featured Content</h3>
    </div>
    <div class="featured-blog-card">
        <div class="featured-row">
            <div class="featured-pic" style="background-image: {{$featured->post_image}}"></div>
                <div class="featured-info">
                    <div class="featured-header">
                        <h3>{{$featured->post_title}}</h3>
                    </div>
                    <div class="featured-desc">
                        <p>{{$featured->post_description}}</p>
                    </div>
                    <div class="featured-button">
                        <p>Read more.</p>
                    </div>
                </div>
            </div>
        </div>
    <div class="page-header">
     <h3>Recent Articles</h3>
    </div>
    <div class="recent-blog-row">
        @forelse($posts as $post)
        <div class="recent-blog-card">
            <img src="{{$post->post_image}}">
            <div class="recent-blog-content">
                <h3>{{$post->post_title}}</h3>
                <p>{{$post->post_description}}</p>
            </div>
            <div class="recent-blog-button">
                <p>Read more.</p>
            </div>
        </div>
        @empty
            <div class="no-posts-found">
                <h3>No posts found.</h3>
            </div>
        @endforelse
    </div>
@endsection
