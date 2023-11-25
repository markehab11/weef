@extends('layouts.app')

@section('title')
    Weef |Dashboard
@endsection

@section('title_page')
    / Products
@endsection

@section('title_page2')
    / Tables
@endsection

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Products</h1>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-info"> <a href="{{route('Products.create')}}" class="text-white"> Add Products </a> </button></td>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Product Code</th>
                        <th>Categorie_id</th>
                        <th>pro</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                      <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td> <img src="{{ $product->image }}" alt="" width="60" height="60"> </td>
                        <td>{{ $product->pro_code }}</td>
                        <td>{{ $product->categorie_id }}</td>
                        <td>
                          <form action="{{ route('Products.destroy', $product->id ) }}" method="post">
                            @method('DELETE')
                            @csrf
                              <a href="{{ route('Products.edit', $product->id ) }}" class="btn btn-secondary">Edit</a>
                              <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
@endsection
