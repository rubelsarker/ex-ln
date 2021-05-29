@extends('product::layouts.master')

@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">
               <div class="card-header">
                   <h3>Category Create</h3>
               </div>
           </div>
           <div class="card-body">
               <div class="col-md-8 offset-md-2">
                   @foreach ($errors->all() as $error)
                       <p class="alert alert-danger">{{ $error }}</p>
                   @endforeach
                   @if (session('status'))
                       <div class="alert alert-success alert-dismissable">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
                           {{ session('status')}}
                       </div>
                   @endif
                   <form action="{{route('product.category.store')}}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label for="title">Category Title</label>
                           <input type="text" class="form-control" placeholder="Category Title" id="title" name="title">
                       </div>

                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
@endsection
