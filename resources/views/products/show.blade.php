@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center flex-column">
    <div class="col-12 col-sm-6 col-md-3 mb-3">
      <div class="card">
        <img class="card-img" src={{$product->imageUrl}} alt={{$product->name}}>
        <div class="card-body text-center">
          <h4 class="card-title">{{$product->name}}</h4>
          <div class="d-flex justify-content-center align-items-center">
            <div class="text-dark"><h5 class="mt-4 font-weight-bold">${{$product->price}}</h5></div>
          </div>
        </div>
      </div>
    </div>
    <div><p>Description:</p> {{$product->description}}</div>
</div>
@endsection
