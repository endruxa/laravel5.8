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
        <h2 class="title-primary">{{ $article->title }}</h2>
        <p class="text-center">{{ $article->description }}
            <span>{{ $article->created_at->format('Y m d') }}</span>
        </p>
    </div>
    <div class="btn-group" role="group">
        {{-- <a class="btn btn-success" href="{{ route('editArticle', $article->id) }}" type="button">Edit<i class="far fa-edit"></i></a>
        <a class="btn btn-danger" href="{{ route('deleteArticle', $article->id) }}" type="button">Delete<i class="far fa-trash-alt"></i></a> --}}
    </div>
@endsection