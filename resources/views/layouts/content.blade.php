@extends('layouts.main')
@section('content')

<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">

      <!-- Home Post List -->
      
      <article class="post-preview">
        <a href="/startbootstrap-clean-blog-jekyll/2017/10/31/man-must-explore.html">
          <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
          
          <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
          
        </a>
        <p class="post-meta">Posted by
          
          Start Bootstrap
          
          on
          October 31, 2017 &middot; <span class="reading-time" title="Estimated read time">

 4 mins  read </span>
          
        </p>
      </article>

      <hr>

      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-primary float-right" href="{{ route('articles') }}">View All Posts &rarr;</a>
      </div>

    </div>
  </div>

  @endsection