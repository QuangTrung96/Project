@extends('layouts.admin')
@section('title') Create Order | PHP0317E @endsection
@section('content')
        <div>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}" class="glyphicon glyphicon-home"></a></li>
                <li><a href="{{ url('admin/order') }}">Order</a></li>
                <li class="active">Create</li>
            </ol>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                       Create New Order
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
                                    {!! Form::open(['method'=>'POST','url'=>'admin/order','role'=>'form']) !!}
                                        <div class="form-group">
                                            <label>User</label>
                                            <input type="text" class="form-control" name="user_id" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Total</label>
                                            <input type="number" class="form-control" name="total" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Payments</label>
                                            <select name="payments" class="form-control">
                                                <option value="tienmat">Tiền Mặt</option>
                                                <option value="card">Thanh Toán Qua Thẻ</option>
                                            </select>
                                        </div>
                                    `   <div class="form-group">
                                            <label>Receive Address</label>
                                            <input type="text" class="form-control" name="receiveAddress" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name Receiver</label>
                                            <input type="text" class="form-control" name="nameReceiver" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Receiver</label>
                                            <input  type="number" class="form-control" name="phoneReceiver" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="enable">Enable</option>
                                                <option value="disable">Disable</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Shipping Time </label>
                                            <input type="datetime" class="form-control" name="shippingTime" required>
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