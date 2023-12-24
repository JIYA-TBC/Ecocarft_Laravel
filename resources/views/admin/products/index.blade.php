@extends('admin.products.layout')

@extends('admin.products.layout.top')

@section('content')
    <div class="row" style="margin-top: 5rem;">
    <div class="col-lg-4 margin-tb">
    <form type="get" action="{{url('/admin/productsearch')}}">
        <div class="form-group">
            <input type="search" name="query" class="form-control" placeholder="Search Products...">
        </div>
        <button class="btn btn-primary">Search</button>
    </form>
    </div>
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-left">
                <h2>All Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('products.create')}}"> Create Products</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{ $value->name }}</td>
            <td>{{ \Str::limit($value->description, 100) }}</td>
            <td>{{ $value->price }}</td>
            <td>
                <form action="{{ route('products.destroy',$value->id) }}" method="POST">     
                    <a class="btn btn-primary" href="{{route('products.edit',$value->id)}}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $products->links() !!}   
@endsection