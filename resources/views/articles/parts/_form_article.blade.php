<div class="form-group col-md-6">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title for article..."
    @if(isset($article)) value="{{$article->title}}" @else value="{{old('title')}}" @endif required>
</div>

<div class="form-group col-md-6">
    <div class="form-row">
        <label for="description">Description</label>
        <textarea class="form-control" rows="3" name="description" id="description" required>@if(isset($article)){{$article->description}}
            @else{{old('description')}}@endif</textarea>
    </div>
</div>

<div class="form-group col-md-6">
    <label for="categories">Categories</label>
    <select class="form-control" multiple name="categories[]" id="categories">
        @if(isset($article))
            @if(!is_null($article->categories))
                @foreach ($article->categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            @else
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            @endif
        @else
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        @endif
    </select>
</div>

<input type="hidden" name="user_id" value="">