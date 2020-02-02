@extends('layouts.main')

@section('content')
    <div class="container">
        <h2 class="title-primary">{{ $article->title }}</h2>
        <p class="text-center">{{ $article->description }}
            <span>{{ $article->created_at->format('Y m d') }}</span>
        </p>
    </div>
    <div class="tag-list">
        @foreach($article->categories as $category)
            <a href="{{ route('category.show', $category) }}"><span class="badge badge-pill badge-info">{{$category->title}}</span></a>
        @endforeach
    </div>
    <br>
    @auth
        <div class="btn-group" role="group">
            <a class="btn btn-success" href="{{ route('editArticle', $article->id) }}" type="button"> Edit <i class="far fa-edit"></i></a>
            <form action="{{ route('deleteArticle', $article) }}" method="POST">
                {{ csrf_field()}}
                @method('DELETE')
                <button type="submit" class="btn btn-danger"> Delete <i class="far fa-trash-alt"></i></button>
            </form>
        </div>
    @endauth
@endsection