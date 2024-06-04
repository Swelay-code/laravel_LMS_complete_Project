@extends('layout.master')
@section('content')

@include('layout.ads')

<!--  @auth
//use for students login
      @endauth --->
<div class="jumbotron text-center">
  <h1 class="display-4">Welcome to Chinland Tech Academy</h1>
  <p class="lead">Empowering Your Future Through Technology</p>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Welcome Message</h5>
        </div>
        <div class="card-body">
          <p class="card-text">Dear Student,</p>
          <p class="card-text">We are thrilled to welcome you to Chinland Tech Academy! You've taken the first step towards enhancing your skills and building a successful career in the ever-evolving field of technology.</p>
          <p class="card-text">We will create a <B>student account</B> for you and notify you when it's ready, so you can access the course.</p>
          <p class="card-text">Throughout your journey with us, you'll have access to top-notch resources, expert instructors, and a vibrant community of learners. Whether you're interested in software development, data science, or cybersecurity, we have courses tailored to suit your needs.</p>
          <p class="card-text">We encourage you to explore our course offerings, participate in interactive sessions, and make the most out of your learning experience. Together, let's pave the way for a brighter future.</p>
          <p class="card-text">Once again, welcome aboard!</p>
          <p class="card-text">Sincerely,<br>Chinland Tech Academy Team</p>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layout.service')
@include('layout.categories')
@endsection