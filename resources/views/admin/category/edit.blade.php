@extends('layouts.admin')
@section('title') Edit "{{ $cate->name }}" Category | PHP0317E @endsection
@section('content')
        <div>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}" class="glyphicon glyphicon-home"></a></li>
                <li><a href="{{ url('admin/category') }}">Category</a></li>
                <li class="active">Edit</li>
            </ol>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                       Edit "{{ $cate->name }}" Category
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit "<span style="color: blue;">{{ $cate->name }}</span>" Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    {!! Form::open(['method'=>'PATCH','url'=>'admin/category/'.$cate->id,'role'=>'form']) !!}
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" required placeholder="Name" value="{{ $cate->name }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Parent ID</label>
                                            <input type="text " class="form-control" name="parent_id" required value="{{ $cate->parent_id }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Is Category</label>
                                            <input type="text " class="form-control" name="isCategory" required value="{{ $cate->isCategory }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type="text " class="form-control" name="slug" required value="{{ $cate->slug }}" />
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