<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Clean Blog
  </title>

  <meta name="description" content="A Blog Theme by Start Bootstrap">

  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="canonical" href="https://blackrockdigital.github.io/startbootstrap-clean-blog-jekyll/">
  <link rel="alternate" type="application/rss+xml" title="Clean Blog" href="/startbootstrap-clean-blog-jekyll/feed.xml">

</head>

<body>
  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="/startbootstrap-clean-blog-jekyll/">Clean Blog</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/startbootstrap-clean-blog-jekyll/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/startbootstrap-clean-blog-jekyll/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/startbootstrap-clean-blog-jekyll/posts">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/startbootstrap-clean-blog-jekyll/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <!-- Page Header -->

<header class="main-image">
  
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Clean Blog</h1>
            
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
            
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
  {{--  @component('alert')
    @slot('title')
        Forbidden
    @endslot
  <strong>Whoops!</strong> Something went wrong!
  @endcomponent  --}}
    @yield('content')
    @unless (Auth::check())
    You are not signed in.
    @endunless
  </div>

  <!-- Footer -->

<hr>

@include('layouts._footer')

<script src="{{ asset('js/app.js')}}"></script>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
</body>
</html>