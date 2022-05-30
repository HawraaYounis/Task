@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-10 bg-white  p-2 m-3">
            <h2>Categories</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 ">
        @if ($categories->count()>0)
            @php
            $i = 1;
            @endphp
        @foreach ($categories as $item)
            <div class="bg-white  col-7 align-items-center p-1">
                <div>
                <p>{{$item->name}}</p>
                <a href="{{ route('deleteCategory',['id'=>$item->id]) }}">Delete Category</a>
                <a href="{{ route('getProducts',['id'=>$item->id]) }}" class="btn btn-danger">show products</a>
                </div>
            </div>
             @endforeach
        @else
           <div><p>There is no Categories..</p></div>
        @endif
        </div>
    </div>
</div>
@endsection