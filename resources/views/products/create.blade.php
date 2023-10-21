@extends('products.layout')

@section('content')
    <div style="margin-left: 180px; margin-right: 150px;">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}" style="background-color: blue;">Back</a>
                </div>
                <div class="pull-left">
                    <h2 style="margin-top: 20px;">Add New Product</h2>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger" style="margin-top: 20px;">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container" style="background-color: #ffffff; border: 5px solid #e0e0e0; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <div class="row align-items-center">
                <div class="col-6">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" style="margin-top: 20px; margin-right: 50px;">
                        @csrf
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name" style="margin-bottom: 10px;">
                        </div>
                        
                        <div class="form-group">
                            <strong>Detail:</strong>
                            <textarea class="form-control" style="height:150px; margin-bottom: 10px;" name="detail" placeholder="Detail"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <strong>Image:</strong>
                            <input type="file" name="image" class="form-control" style="margin-bottom: 10px;" placeholder="image">
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="background-color: blue; border-color: blue; display: block; margin: 0 auto;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
