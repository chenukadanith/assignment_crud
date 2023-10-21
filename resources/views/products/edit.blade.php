@extends('products.layout')

@section('content')
    <div style="margin-left: 180px; margin-right: 140px; background-color: #f5f5f5; padding: 20px; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}" style="background-color: blue;">Back</a>
                </div>
                <div class="pull-left">
                    <h2 style="color: #333; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);">Edit Product</h2>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger" style="background-color: #ff9999; border: 1px solid #ff6666; box-shadow: 0 0 10px rgba(255, 0, 0, 0.2);">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul style="margin: 10px 0;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row" style="margin-top: 20px;">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <textarea class="form-control" style="height:150px; line-height: 1.5;" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="image" class="form-control" placeholder="image">
                        <img src="/images/{{ $product->image }}" width="300px" style="box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
                <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="background-color: blue; border-color: blue; display: block; margin: 0 auto;">Submit</button>
                        </div>
            </div>
        </form>
    </div>
@endsection
