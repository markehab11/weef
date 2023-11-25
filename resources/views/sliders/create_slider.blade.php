@extends('layouts.app')

@section('title')
    Weef |Dashboard
@endsection

@section('title_page')
    /  Add Admin
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
              <form action="{{ route('sliders.store') }}" method="post" enctype="multipart/form-data">
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
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" placeholder="title" name="title">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
              </form>
            </div>
            <!-- /.card -->
</section>
<br><br><br><br>
@endsection
