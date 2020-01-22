<div class="form-group col-md-6">
    <label for="category_title">Title</label>
    <input type="text" class="form-control" name="category_title" id="category_title" placeholder="Enter Title for category..."
    @if(isset($category)) value="{{$category->title}}" @else value="{{old('title')}}" @endif required>
</div>

<input type="hidden" name="user_id" value="">