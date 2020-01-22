@extends('layouts.main')
@section('content')
<div class="row">
    <div class="container-fluid">
        @include('errors._form_errors')
        <form class="form-group" action="{{ route('category.update', $category) }}" method="POST" role="form">
            {{csrf_field()}}
            @method('PUT')
            @include('categories.parts._formCategory')
            <hr>
            <button type="submit" class="btn btn-primary">Update category</button>
        </form>
    </div>
</div>

@endsection