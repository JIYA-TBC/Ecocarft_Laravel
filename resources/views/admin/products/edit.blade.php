@extends('admin.products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Enter Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Enter Description">{{$product->description}}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" value="{{$product->price}}" class="form-control" placeholder="Enter Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Category:</strong>
        <select name="category" class="form-control">
            <option value="Food" @if($product->category == 'Food') selected @endif>Food</option>
            <option value="Skin Care" @if($product->category == 'Skin Care') selected @endif>Skin Care</option>
            <option value="Art" @if($product->category == 'Art') selected @endif>Art</option>
            <option value="Hair Care" @if($product->category == 'Hair Care') selected @endif>Hair Care</option>
        </select>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Image:</strong>
        @if($product->image)
            <img src="{{ asset('path/to/your/images/' . $product->image) }}" value="{{$product->image}}" alt="" style="max-width: 100px; max-height: 100px;">
        @else
            <p>No previous image available</p>
        @endif
        <input type="file" name="image" class="form-control">
    </div>
</div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection