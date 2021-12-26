@foreach($Category_product as $Category_product)
<p id="subcateg_title">
 {{$Category_product->id_product}}
</p>
@include('layout.productsbook_list',['Product' => $Category_product->Product])
@endforeach
