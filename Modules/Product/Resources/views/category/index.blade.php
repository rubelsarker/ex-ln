@extends('product::layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-header">
                    <h3>Category List</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-8 offset-md-2">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
                            {{ session('status')}}
                        </div>
                    @endif
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->title}}</td>
                                <td>

                                    <form action="{{ route('product.category.destroy',$category->id) }}" method="POST">
                                        @csrf()
                                        @method('DELETE')
                                        <a href="{{route('product.category.edit',$category->id)}}" class="text-info" >Edit</a>/
                                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
