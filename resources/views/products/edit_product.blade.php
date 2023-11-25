@extends('layouts.app')
@section('title')
    Weef |Dashboard
@endsection

@section('title_page')
    /  Edit Products
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
                    <h3 class="card-title">Edit</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('Products.update', $products->id ) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control"  placeholder="name" name="name" value="{{ $products->name }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" class="form-control" name="image">
                          </div>
                        <div>
                            <input type="hidden" name="old_image" value="{{ $products->image }}">
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Products Code</label>
                            <input type="text" class="form-control" placeholder="Products Code" name="pro_code" value="{{ $products->pro_code }}">
                          </div>
                          <div class="form-group">
                              <label for="color_id">Category</label>
                              <select name="categorie_id" class="form-control">
                                  <option selected>Category</option>
                                @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}" @if ($categorie->id == $products->categorie_id) selected @endif> {{ $categorie->name }}</option>
                                @endforeach
                          </select>
                              </select>
                          </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </div>
                  </form>
                </div>
    </section>
        @endsection
        <br><br><br>
    </div>
