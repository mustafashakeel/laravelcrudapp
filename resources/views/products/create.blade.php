@extends('products.layout')

@section('content')
<form action="{{route('products.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name</strong>
                <input type="text" name="name" class="form-control" placeholder="please enter name ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Details</strong>
                <input type="text" name="detail" class="form-control" placeholder="please enter details ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection
