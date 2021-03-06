@extends('layouts.main')
@section('header')
    <header class="masthead posts-image">
        <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
                <h1>Posts</h1>
                <span class="subheading"></span>
            </div>
            </div>
        </div>
        </div>
    </header>
@endsection
@section('content')
        <div class="container">
            @auth
                <a href="{{ route('createArticle') }}" class="btn btn-primary">Create article</a>
            @endauth

            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    @foreach ($articles as $article)
                    <article class="post-preview">
                        <div class="col-lg-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('storage/' . $article->image_path)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <p class="card-text">{{ $article->description }}</p>
                                    <a href="{{route('showArticle', $article->id)}}" class="btn btn-primary">{{$article->title}}</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            {{ $articles->links() }}
        </div>
@endsection
 