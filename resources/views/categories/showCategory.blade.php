@extends('layouts.main')
@section('content')

<div class="card">
    <h5 class="card-header"><a href="{{route('category.index')}}">Categories</a></h5>
    <div class="card-body">
      <h4 class="card-title">{{$category->title}}</h4>
      Author: <h5>{{$category->user->name}}</h5>
      <hr>
      Articles:
      @foreach ($category->articles as $article)
        <a href="{{ route('showArticle', $article) }}"><span class="badge badge-pill badge-primary">{{$article->title}}</span></a>
      @endforeach
    </div>
</div>
@endsection