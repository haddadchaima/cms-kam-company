@extends('layout.store')

@section('title', 'STORE-TEC - Home')

@section('content')


<section class="text-center mb-4" style="margin-top:30px;">
<div class="col-sm-12 col-md-12" style="padding:0px;">
<div style="padding:0px;text-align:center;">
<span class="text_title_home_blod">
New collections
</span>
</div>
</div>

<div class="row wow fadeIn" style="margin-top:20px;">
<div class="container products">

<div class="row">
@foreach($products as $product)
<div class="col-sm-6 col-md-3">
<div class="thumbnail">
<a href="{{route('store.show', $product->id)}}">
<img src="{{ asset('photo/products_logo/'.$product->photo) }}" style="width:90%;height:160px;">
</a>
<div class="caption">
<h5 style="height:auto;">{{ $product->product_name }}</h5>
<p><strong>Price: </strong>
@if(request()->route('id')=='dol')
{{ $product->product_price * 1.22 }} $
@else
{{ $product->product_price }} {{ $product->product_currency }}
@endif
</p>
<p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn nav-link border border-light rounded waves-effect text-center" role="button">Add to cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a> </p>
</div>
</div>
</div>
@endforeach
</div>
</div>
</div>
</section>



<section class="text-center mb-4" style="margin-top:20px;">
<div style="padding:0px;text-align:center;">
<span class="text_title_home_blod">
Buy by Trend
</span>
</div>
<div class="row wow fadeIn" style="margin-top:20px;">
<div class="container products">

        <div class="row">

            @foreach($products as $product)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="{{route('store.show', $product->id)}}">
						<img src="{{ asset('photo/products_logo/'.$product->photo) }}" style="width:90%;height:160px;">
						</a>
                       <div class="caption">
                            <h5 style="height:auto;">{{ $product->product_name }}</h5>
                            <p><strong>Price: </strong> {{ $product->product_price }} {{ $product->product_currency }}</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" id="postclick" class="btn nav-link border border-light rounded waves-effect text-center" role="button">Add to cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->

    </div>
	</div>
<!--Grid row-->
</section>




<script>
$(document).ready(function() {

$("#postclick").on("click",function(event){

      event.preventDefault();

      var product_id = $(this).data('id');

        $.ajax({

            type: "POST",
            url: url,
			headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { id: product_id },
            success: function (data) {
            console.log(data);

            },
            error: function (data) {
            console.log('Error:', data);
            }
        });
});

    });
</script>

@endsection
