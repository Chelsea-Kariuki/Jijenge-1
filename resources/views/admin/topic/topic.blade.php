@extends('layouts.admin')

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
                        <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.topics.index') }}">Topics</a></li>
                        <li class="breadcrumb-item active">{{ $topic->title }} Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid mb-3" align="right">
            <button class="btn btn-primary px-3" type="button" data-toggle="modal" data-target="#modal-default">New Document</button>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach($documents as $document)
                <div class="col-lg-3">
                    <!-- Card -->
                    <div class="card">

                        <!-- Card image -->
                        <img class="card-img-top" src="/img/pdf3.jpg" alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title"><a>{{ $document->title }}</a></h4>
                            <!-- Text -->
                            <p class="card-text">{{ $document->description }}</p>
                            <!-- Button -->
                            <a href="#" class="btn btn-md px-3 btn-primary">Button</a>

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

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Document</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('store-document', $topic->id) }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body mx-3">
                            @csrf
                            <div class="form-group">
                                <label for="document_title" class="col-md-6 col-form-label">Document Title</label>
                                <input type="text" class="form-control" id="document_title" placeholder="Title" name="document_title" required>

                                <label for="document_description" class="col-md-6 col-form-label">Document description</label>
                                <textarea type="text" class="form-control" id="document_description" placeholder="Description" name="document_description" required></textarea>


                                <div class="file-field mt-4">
                                    <input type="file" name="document" id="document" required>
                                </div>
                            </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Save Document</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
