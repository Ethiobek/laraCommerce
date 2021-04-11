@extends('master')
@section('content')
<div class="custome-product">
   <div class="col-sm-4">
       <a href="#">Filter</a>
   </div>
   <div class="col-sm-4">
    <div class="trending-wrapper">
        <h3>Search results:</h3>
        @foreach ($products as $item)
                <div class="searched-item">
                    <a href="detail/{{$item['id']}}">
                    <img class="trending-img" src="{{$item['gallery']}}" alt="Los Angeles">
                    <h2>{{$item['name']}}</h2>
                    <h5>{{$item['description']}}</h5>
                    </a>
                </div>
        @endforeach
    </div>
   </div>
</div>

@endsection