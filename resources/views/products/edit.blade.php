@extends('products.layout')

@section('content')
<form action="{{route('products.update',$product->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name</strong>
                <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="please enter name ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Details</strong>
                <input type="text" name="detail" value="{{$product->detail}}"class="form-control" placeholder="please enter details ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </div>
</form>
@endsection
