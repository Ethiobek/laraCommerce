@extends('master')
@section('content')
<div class="custome-product"> 
   <div class="col-sm-10">
    <div class="trending-wrapper">
        <h4>Items in the cart</h4>
        @foreach ($products as $item)
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-3">
                        <img class="trending-img" src="{{$item->gallery}}" alt="Los Angeles">
                    </div>

                    <div class="col-sm-3">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-warning">Remove from cart</button>
                    </div>
                </div>
        @endforeach
    </div>
   </div>
   
</div>
@endsection