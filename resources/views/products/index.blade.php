@extends('products.layout')

@section('content')

   <div class="row">

       <a class="btn-success col-2" href="{{ route('products.create') }}">Create New Product </a>
   </div>
   <table class="table table-bordered">
       <tr>
           <th>Serial #</th>
           <th>Product Name</th>
           <th>Product Details </th>
           <th width="280px"> Action</th>
       </tr>

           @foreach ($products as $product )
            <tr>
                <td>{{$product->id}}</td>
                <td> {{$product->name}}</td>
                <td> {{$product->detail}} </td>
                <td>
                    <form action="{{route('products.destroy',$product->id)}}" method="POST">
                        <a href="{{route('products.show',$product->id)}}" class="btn btn-info">Show</a>
                        <a href="{{route('products.update',$product->id)}}" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger" >Delete </button>
                    </form>
                </td>
             </tr>
           @endforeach




   </table>
@endsection
