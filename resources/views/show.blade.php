@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="blog-card">
        <div class="blog-button">
            <a href="{{route('blog.index')}}">Back to blog</a>
        </div>
        <div class="blog-header">
            <h1>{{$post->post_title}}</h1>
            <p>By: Andy Purvis</p>
        </div>
        <div class="blog-image">
            <img src="{{ asset($post->post_image) }}">
        </div>
        <div class="blog-text">
            <p>{{$post->post_content}}</p>
        </div>
    </div>
@endsection
