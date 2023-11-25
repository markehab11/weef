
@extends('layouts.app')

@section('title')
    Weef |Dashboard
@endsection

@section('title_page')

@endsection

@section('css')

@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-dark text-white">
                        <div class="inner">
                            <h3>Sliders</h3>
                        </div>
                        <a href="{{ route('sliders.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-secondary text-white">
                        <div class="inner">
                            <h3>Categories</h3>
                        </div>
                        <a href="{{ route('Categories.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-dark text-white">
                        <div class="inner">
                            <h3>Products</h3>
                        </div>
                        <a href="{{ route('Products.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-secondary text-white">
                        <div class="inner">
                            <h3>Blogs</h3>
                        </div>
                        <a href="{{ route('blogs.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
