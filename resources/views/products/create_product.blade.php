@extends('layouts.app')

@section('title')
    Weef |Dashboard
@endsection

@section('title_page')
    /  Add Products
@endsection

@section('title_page2')
    / Tables
@endsection
    @section('content')

    <div class="card">
        <section class="content">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add</h3>
                </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('Products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control"  placeholder="name" name="name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" class="form-control" name="image">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Product Code</label>
                            <input type="text" class="form-control" placeholder="product code" name="pro_code">
                          </div>
                            <label for="Category_id">Category</label>
                          <select class="form-control" aria-label="Default select example" name="categorie_id"width="200" height="150" >
                          <option selected>Category</option>
                            @foreach($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                            @endforeach
                          </select>
                            <!-- /.card-body -->
                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </div>
                  </form>
                </div>
    </section>
    <br><br><br><br>
@endsection
