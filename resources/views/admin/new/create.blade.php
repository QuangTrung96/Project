@extends('layouts.admin')
@section('title') Create News | PHP0317E @endsection
@section('content')
        <div>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}" class="glyphicon glyphicon-home"></a></li>
                <li><a href="{{ url('admin/new') }}">News</a></li>
                <li class="active">Create</li>
            </ol>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                       Create New News
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
                                    {!! Form::open(['type'=>'POST','url'=>'admin/new','role'=>'form']) !!}
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" name="subject" required />
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea name="contentNews" id="contentNews"></textarea>
                                            <script>CKEDITOR.replace('contentNews');</script>
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