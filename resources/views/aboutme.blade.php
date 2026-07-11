@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="page-header">
        <h3>About me</h3>
    </div>
   <div class="about-me-card">
       <div class="about-me-photo-area">
           <div class="about-me-photo"></div>
       </div>
       <div class="about-me-text">
           <h3>Well, Hello There!</h3>
           <span>Hi, my name is Andy. I am recent graduate with a B.S in Accounting.</span>
           <span>Before that, I pursued a BAS in Software Development.</span>
           <span> I am seeking a career that allows me to use both my love for technology and love for accounting simultaneously.</span>
               <span>I am enrolled at WGU currently in their Masters in Accounting with a Financial Reporting Specialization.</span>
               <span>I plan to sit the CPA.</span>
           <div class="about-me-button-box">
               <a href="./resume.docx">Click here to view my Resume</a>
           </div>
       </div>
    </div>

@endsection
