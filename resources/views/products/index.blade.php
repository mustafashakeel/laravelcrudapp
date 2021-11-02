@extends('products.layout')

@section('content')

   <div class="row">
       <div class="col-lg-12 margin-tb">
           <h2>Laravel Crud Application ( Products )</h2>
       </div>
       <a class="btn-success" href="{{ route('products.create') }}">Create New Product </a>
   </div>
@endsection
