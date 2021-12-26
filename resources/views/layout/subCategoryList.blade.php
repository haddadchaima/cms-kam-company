@foreach($subcategory as $subcategory)
<ul>
<li><a href="{{ route('category.view', $category->id) }}">{{$subcategory->name}}</a></li> 
</ul> 
@endforeach
