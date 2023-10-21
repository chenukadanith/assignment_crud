@extends('products.layout')
     
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <!-- Left content here -->
        </div>
        <div class="pull-right" style="margin-left: 180px;">
            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
        </div>
    </div>
</div>
    
@if ($message = Session::get('success'))
            <div class="alert alert-success" style="margin-left: 180px; margin-right: 150px;">
                <p>{{ $message }}</p>
            </div>
        @endif
     
    <div style="margin-left: 180px; margin-right: 150px;">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger" style="background-color: red; border-color: red;">Delete</button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

    
    {!! $products->links() !!}
        
@endsection