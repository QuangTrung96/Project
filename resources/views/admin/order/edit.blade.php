@extends('layouts.admin')
@section('title') Edit "{{ $order ->user->name }}" Order | PHP0317E @endsection
@section('content')
        <div>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}" class="glyphicon glyphicon-home"></a></li>
                <li><a href="{{ url('admin/order') }}">Order</a></li>
                <li class="active">Edit</li>
            </ol>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                       Edit "{{ $order ->user->name }}" Order
                    </h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit "{{ $order ->user->name }}" Order
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    {!! Form::model($order, ['method'=>'PATCH','url'=>['admin/order', $order->id],'role'=>'form']) !!}

                                        <div class="form-group">
                                            <label>User</label>
                                            {!! Form::text('user_id', $users, null, ["class" => "form-control"]) !!}
                                        </div>
                                        <div class="form-group">
                                            <label>Total</label>
                                            {!! Form::text ('total', null, ["class" => "form-control",'placeholder' => "Total"]) !!}
                                        </div>
                                        <div class="form-group">
                                            <label>Payments</label>
                                            {!! Form::text('payments', null, ["class" => "form-control",'placeholder' => "Payments"]) !!}
                                            {{--<select name="payments" class="form-control">--}}
                                                {{--<option value="tienmat">Tiền Mặt</option>--}}
                                                {{--<option value="card">Thanh Toán Qua Thẻ</option>--}}
                                            {{--</select>--}}
                                        </div>
                                    `   <div class="form-group">
                                            <label>Receive Address</label>
                                            {!! Form::text('receiveAddress', null, ["class" => "form-control",'placeholder' => "Receive Address"]) !!}
                                        </div>
                                        <div class="form-group">
                                            <label>Name Receiver</label>
                                            {!! Form::text('nameReceiver', null, ["class" => "form-control",'placeholder' => "Name Receiver"]) !!}
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Receiver</label>
                                            {!! Form::text('phoneReceiver', null, ["class" => "form-control",'placeholder' => "Phone Receiver"]) !!}
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            {!! Form::text('status', null, ["class" => "form-control",'placeholder' => "Status"]) !!}
                                            {{--<select name="status" class="form-control">--}}
                                                {{--<option value="enable">Enable</option>--}}
                                                {{--<option value="disable">Disable</option>--}}
                                            {{--</select>--}}
                                        </div>
                                        <div class="form-group">
                                            <label>Shipping Time </label>
                                            {!! Form::text('shippingTime', null, ["class" => "form-control",'placeholder' => "Shipping Time"]) !!}
                                            {{--<input type="datetime" class="form-control" name="shippingTime" required>--}}
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