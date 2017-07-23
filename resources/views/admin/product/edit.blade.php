@extends('layouts.admin')
@section('title') Edit "{{$product->title}}" | PHP0317E @endsection
@section('content')
        <div>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}" class="glyphicon glyphicon-home"></a></li>
                <li><a href="{{ url('admin/product') }}">Product</a></li>
                <li class="active">Edit</li>
            </ol>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                       Edit Product
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit "{{$product->title}}"
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    {!! Form::model($product,['method'=>'PATCH','url'=>['admin/product', $product->id],'files' => true,'role'=>'form']) !!}
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