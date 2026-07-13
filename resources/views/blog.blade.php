@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="page-header">
        <h3>Featured Content</h3>
    </div>
    <div class="featured-blog-card">
        <div class="featured-row">
            <div class="featured-pic"></div>
                <div class="featured-info">
                    <div class="featured-header">
                        <h3>Featured Content</h3>
                    </div>
                    <div class="featured-desc">
                        <p>Exploring new ideas, creative projects, and lessons learned throughout my journey</p>
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
        <div class="recent-blog-card">
            <img src="../img/stock2.jpg">
            <div class="recent-blog-content">
                <h3>Recent Article 1</h3>
                <p>The calculator quickly solved complex equations, saving time for every student.</p>
                <div class="recent-blog-button">
                    <p>Read more.</p>
                </div>
            </div>
        </div>
        <div class="recent-blog-card">
            <img src="../img/stock2.jpg">
            <div class="recent-blog-content">
                <h3>Recent Article 1</h3>
                <p>The calculator quickly solved complex equations, saving time for every student.</p>
                <div class="recent-blog-button">
                    <p>Read more.</p>
                </div>
            </div>
        </div>
        <div class="recent-blog-card">
            <img src="../img/stock2.jpg">
            <div class="recent-blog-content">
                <h3>Recent Article 1</h3>
                <p>The calculator quickly solved complex equations, saving time for every student.</p>
                <div class="recent-blog-button">
                    <p>Read more.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
