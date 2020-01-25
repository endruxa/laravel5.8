@extends('layouts.main')
@section('content')
<div class="row">

    <div class="container-fluid">
        @include('errors._form_errors')
        <form class="form-group" action="{{ route('store') }}" method="POST" role="form" enctype="multipart/form-data">
            {{csrf_field()}}
            {{ dd($categories)}}
           @include('articles.parts._form_article')

            <hr>

            <div class="col-md-6">
                <input type="file" name="image">
            </div>

            <hr>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>

    </div>

</div>

@endsection