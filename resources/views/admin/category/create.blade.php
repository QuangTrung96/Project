@extends('layouts.admin')
@section('title') Create Category | PHP0317E @endsection
@section('content')
        <div>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}" class="glyphicon glyphicon-home"></a></li>
                <li><a href="{{ url('admin/category') }}">Category</a></li>
                <li class="active">Create</li>
            </ol>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                       Create New Category
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create New Item
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    {!! Form::open(['type'=>'POST','url'=>'admin/category','role'=>'form']) !!}
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Parent ID</label>
                                            <input class="form-control" name="parent_id" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Is Category</label>
                                            <input class="form-control" name="isCategory" required>
                                        </div>
                                    `   <div class="form-group">
                                            <label>Slug</label>
                                            <input class="form-control" name="slug" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    {!! Form::close() !!}
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /. PAGE INNER  -->
@endsection