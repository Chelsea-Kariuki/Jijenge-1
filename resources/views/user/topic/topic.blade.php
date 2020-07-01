@extends('layouts.users')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $topic->title }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('userTopics.index') }}">Topics</a></li>
                        <li class="breadcrumb-item active">{{ $topic->title }} Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach($documents as $document)
                    <div class="col-lg-3">
                        <!-- Card -->
                        <div class="card">

                            <!-- Card image -->
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4 class="card-title">{{ $document->title }}</h4>
                                <!-- Text -->
                                <p class="card-text">{{ $document->description }}</p>
                                <!-- Link -->
                                <a href="{{ route('user-show-document', [ 'id' => $document->id ]) }}" class="black-text d-flex justify-content-end">
                                    <h6>Read more <i class="fas fa-angle-double-right"></i></h6>
                                </a>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                @endforeach
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.Main content -->

@endsection
