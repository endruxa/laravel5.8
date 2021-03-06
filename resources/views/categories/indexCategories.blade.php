@extends('layouts.main')
@section('header')
    <header class="masthead categories-image">
        <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
                <h1>Categories</h1>
                <span class="subheading"></span>
            </div>
            </div>
        </div>
        </div>
    </header>
@endsection

@section('content')

@auth
  <a class="btn btn-primary" href="{{ route('category.create') }}" role="button">Create category</a>
@endauth

<h2 class="card-title">Categories</h2>
  @foreach($categories as $category)
  <div class="card text-center" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-text"><a href="{{route('category.show', $category)}}">{{ $category->title }}</a></h5>
    </div>
    <div class="card-footer">
      @auth
          <div class="row justify-content-center">
            <a class="btn btn-success" href="{{ route('category.edit', $category) }}" type="button"> Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <form action="{{ route('category.destroy', $category) }}" method="POST">
              {{ csrf_field()}}
              @method('DELETE')
              <button type="submit" class="btn btn-danger"> Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>
          </div>
        @endauth
    </div>
  </div>
  @endforeach
@endsection