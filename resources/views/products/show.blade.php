@extends('products.layout')

@section('content')
    <div style="margin-left: 180px; margin-right: 180px; padding: 20px; background-color: #f5f5f5; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
               
               
            </div>
        </div>

        <div class="row" style="margin-top: 20px;">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $product->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    {{ $product->detail }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <img src="/images/{{ $product->image }}" width="500px" style="box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1); border: 1px solid #ddd; border-radius: 5px;">
                </div>
            </div>
        </div>
    </div>
@endsection
