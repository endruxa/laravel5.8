@extends('layouts.main')
@section('content')
<div class="row">

    <div class="container-fluid">
        @include('errors._form_errors')
        <form class="form-group" action="{{ route('store') }}" method="Post" role="form" enctype="multipart/form-data">
            {{csrf_field()}}
            
            <div class="form-group col-md-6">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title for article..."
                    value="{{old('title')}}" required>
            </div>

            <div class="form-group col-md-6">
                <div class="form-row">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="3" name="description" id="description" required>{{old('description')}}</textarea>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="categories">Categories</label>
                <select class="form-control" multiple name="categories[]" id="categories">
                    <option value="1">Tennis</option>
                    <option value="2">Paintball</option>
                    <option value="3">Yoga</option>
                </select>
            </div>

            <input type="hidden" name="user_id" value="">

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