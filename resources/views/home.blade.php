@extends('layouts.users')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"> Welcome <small>{{ Auth::user()->name }}</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="row">
        <div class="col-lg-12">

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="card-title m-0">Learn How to Invest</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Special title treatment</h6>

                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{ route('userTopics.index') }}" class="btn btn-primary">Curriculum</a>
                </div>
            </div>

        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="card-title m-0">Welcome Back</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Special title treatment</h6>

                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="card-title m-0">Welcome Back</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Special title treatment</h6>

                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->

@endsection
