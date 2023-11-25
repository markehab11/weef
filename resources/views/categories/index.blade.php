@extends('layouts.app')

@section('title')
    Weef |Dashboard
@endsection

@section('title_page')
    / Categories
@endsection

@section('title_page2')
    / Tables
@endsection
 @section('content')
     <section class="content">
         <div class="card">
             <div class="card-body">
                 <h1 class="card-title">Categories</h1>
             </div>
             <div class="card-body">
                 <button type="button" class="btn btn-info"> <a href="{{route('Categories.create')}}" class="text-white"> Add Category </a> </button></td>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
                 <table id="example1" class="table table-bordered table-striped">
                     <thead>
                         <tr>
                            <th>Id</th>
                            <th>Name</th>
                             <th>Name Ar</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>pro</th>
                          </tr>
                     </thead>
                 <tbody>

                 @foreach($categories as $categorie)
                     <tr>
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->name }}</td>
                         <td>{{ $categorie->name_ar }}</td>
                        <td> <img src="{{ $categorie->image }}" alt="" width="60" height="60"> </td>
                        <td>{{ $categorie->title }}</td>
                        <td>
                          <form action="{{ route('Categories.destroy', $categorie->id ) }}" method="post">
                            @method('DELETE')
                            @csrf
                              <a href="{{ route('Categories.edit', $categorie->id ) }}" class="btn btn-secondary" >Edit</a>
                              <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                     </tr>
                     @endforeach
                 </table>
             </div>
         </div>
     </section>
 @endsection
