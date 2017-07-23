@extends('layouts.admin')
@section('title') Create Product | PHP0317E @endsection
@section('content')
    <div>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}" class="glyphicon glyphicon-home"></a></li>
            <li><a href="{{ url('admin/Product') }}">Product</a></li>
            <li class="active">Create</li>
        </ol>
    </div>
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Create New Product
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
                                {!! Form::open(['method' => 'POST','url'=>'admin/product','files'=>true,'role'=>'form']) !!}
                                    @include('admin.product.form')
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