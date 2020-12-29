<div class="form-group">
   <input type="text" class="form-control" name="title" value="{{$page->title ?? ''}}" placeholder="Title">
</div>
<div class="form-group">
   <input type="text" class="form-control" name="path" value="{{$page->path ?? ''}}" placeholder="Path">
</div>
<div class="form-group">
   <input type="text" class="form-control" name="main_content" value="{{$page->main_content ?? ''}}" placeholder="Text">
</div>
<div class="form-group">
   <input type="text" class="form-control" name="author" value="{{$page->author ?? ''}}" placeholder="Author">
</div>
<div class="form-group">
   <input type="integer" class="form-control" name="categorry_id" value="{{$page->categorry_id ?? ''}}" placeholder="Category">
</div>
<div class="form-group">
    <select name="categories[]" multiple="" class="form-control">
        @include('admin.pages._categories')
    </select>
</div>

<h4>Custom fields:</h4>
<div class="form-group">
      <input type="text" class="form-control" name="key_teg" value="{{$page->key_teg ?? ''}}" placeholder="key">
      <input type="text" class="form-control" name="value_teg" value="{{$page->value_teg ?? ''}}" placeholder="value">
</div>
<hr>

<button type="submit" class="btn btn-primary">Save</button>
