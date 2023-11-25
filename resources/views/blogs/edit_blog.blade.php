@extends('layouts.app')
@section('title')
    Weef |Dashboard
@endsection

@section('title_page')
    /  Edit Blogs
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
                  <form action="{{ route('blogs.update', $blogs->id ) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control"  placeholder="name" name="name" value="{{ $blogs->name }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" class="form-control" name="image">
                          </div>
                        <div>
                            <input type="hidden" name="old_image" value="{{ $blogs->image }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" placeholder="title" name="title" value="{{ $blogs->title }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" class="form-control" placeholder="description" name="description" value="{{ $blogs->description }}">
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
