@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>New Product</h1>
        <form action={{ route('products.update', $product->id) }} method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value={{$product->name}}>
                @error('name')
                <p class="text-danger">{{$errors->first('name')}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" id="price" value={{$product->price}}>
                @error('price')
                <p class="text-danger">{{$errors->first('price')}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="imageUrl">Image url</label>
                <input type="text" class="form-control" name="imageUrl" id="imageUrl" value={{$product->imageUrl}}>
                @error('imageUrl')
                <p class="text-danger">{{$errors->first('imageUrl')}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" >{{$product->description}}</textarea>
                @error('description')
                <p class="text-danger">{{$errors->first('description')}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
