@extends('layouts.app')

@section('title')
    Weef |Dashboard
@endsection

@section('title_page')
    / Blogs
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
                <button type="button" class="btn btn-info"> <a href="{{route('blogs.create')}}" class="text-white"> Add Blogs </a> </button></td>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>pro</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                      <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->name }}</td>
                        <td> <img src="{{asset('images/blogs/'. $blog->image ) }}" alt="" width="60" height="60"> </td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->description }}</td>
                        <td>
                          <form action="{{ route('blogs.destroy', $blog->id ) }}" method="post">
                            @method('DELETE')
                            @csrf
                              <a href="{{ route('blogs.edit', $blog->id ) }}" class="btn btn-secondary" >Edit</a>
                              <button type="submit" class="btn btn-danger" >Delete</button>
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
