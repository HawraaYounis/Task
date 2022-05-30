@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-10 bg-white  p-2 m-3">
            <h2>Products</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 ">
        @if ($products->count()>0)
            @php
            $i = 1;
            @endphp
        @foreach ($products as $item)
            <div class="bg-white  col-7 align-items-center p-1">
                <div>
                <p>{{$item->description}}</p>
                <p>{{$item->price}}</p>
                <a href="{{ route('deleteProduct',['id'=>$item->id]) }}">Delete Product</a>
                <a href="{{ route('editProduct',['id'=>$item->id]) }}">Edit Product</a>
                </div>
            </div>
             @endforeach
        @else
           <div><p>There is no Products for this Category..</p></div>
        @endif
        </div>
    </div>
</div>
@endsection