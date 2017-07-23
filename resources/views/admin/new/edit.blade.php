@extends('layouts.admin')
@section('title') Edit "{{ $news->subject }}" News | PHP0317E @endsection
@section('content')
        <div>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}" class="glyphicon glyphicon-home"></a></li>
                <li><a href="{{ url('admin/new') }}">News</a></li>
                <li class="active">Edit</li>
            </ol>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                       Edit "{{ $news->subject }}" News
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit "<span style="color: blue;">{{ $news->subject }}</span>" News
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    {!! Form::open(['method'=>'PATCH','url'=>'admin/new/'.$news->id,'role'=>'form']) !!}
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" name="subject" required placeholder="Subject" value="{{ $news->subject }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea name="contentNews" id="contentNews">{{ $news->content }}</textarea>
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