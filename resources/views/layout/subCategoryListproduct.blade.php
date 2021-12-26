@foreach($subcategory as $subcategory)
<label style="width:100%;margin-left:20px;">
<input type="checkbox" name="category_id[]" id="category" value="{{$subcategory->id}}" > {{$subcategory->name}}
</label>
@endforeach
