@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Topics</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Topics Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid mb-3" align="right">
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal-default">New Topic</button>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    @foreach($topics as $topic)
                        <div class="card bg-gradient-primary">
                            <div class="card-header border-0">

                                <h3 class="card-title">
                                    {{ $topic->title }}
                                </h3>
                                <!-- tools card -->
                                <div class="card-tools">
                                    <!-- button with a dropdown -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <i class="fas fa-bars"></i></button>
                                        <div class="dropdown-menu float-right" role="menu">
                                            <a href="{{ route('show-topic' , [ 'id' => $topic->id ]) }}" class="dropdown-item">View Topic</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">Delete Topic</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pt-0">
                                <!--The documents -->
                                <div style="width: 100%">

                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
        <div class="col-md-12">
            {{ $topics->links() }}
        </div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.topics.store') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="topic_title" class="col-md-6 col-form-label">Topic Title</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="topic_title" placeholder="Topic Title" name="topic_title" required>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save New Topic</button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
