@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Products</h1>
        <a class="btn btn-primary" href={{route('products.create') }}>New Product</a>
    </div>
    <table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td><a href={{ route('products.edit',$product->id)}}>Edit</a></td>
                <td><a href={{ route('products.show',$product->id)}}>Detail</a></td>
                <td>
                    <form action={{ route('products.destroy', $product->id) }} method="post">
                        @csrf
                        @method('DELETE')
                        <button class="text-danger btn btn-link" type="submit" >Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
