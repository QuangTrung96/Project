@extends('layouts.admin')
@section('title') Order | PHP0317E @endsection
@section('content')
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Order List
                </h1>
            </div>
        </div>
        <!-- /. ROW  -->

        @if(Session::has('success'))
            <div class="alert bg-primary" role="alert">
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Item</h1>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="{{ url('admin/order/create') }}"> Create New</a>
                                    </div>

                                    <div class="col-sm-6 navbar-right">
                                        <div style="float: right">
                                            {!! Form::open(['method' => 'GET','url' => 'admin/order']) !!}
                                            <input type="text" name="keyword" placeholder="Type you word ..."
                                                   @if(Request::has('keyword')) value="{{ Request::get('keyword') }}" @endif() />
                                            <input type="submit" value="Search"/>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-hover dataTable no-footer"
                                       id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                    <tr>
                                        <th style="width: 30px;text-align: center;">
                                            <input name="btSelectAll" type="checkbox">
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending"
                                            style="width: 30px;text-align: center;">ID
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 150px;text-align: center;">User_id
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 100px;text-align: center;">Payments
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 100px;text-align: center;">receiveAddress
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 170px;text-align: center;">Status
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 170px;text-align: center;">NameReceiver
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 170px;text-align: center;">PhoneReceiver
                                        </th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 170px;text-align: center;">ShippingTime
                                        </th>

                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 170px;text-align: center;">
                                        </th>
                                        <th tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending"
                                            style="width: 95px;text-align: center;">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($orders))
                                        @foreach($orders as $item)
                                            <tr style="text-align: center;">
                                                <td><input type="checkbox"/></td>
                                                <td>{{ $item->id}}</td>
                                                <td>{{ $item->user->name}}</td>
                                                <td>{{ $item->payments }}</td>
                                                <td>{{ $item->receiveAddress }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>{{ $item->nameReceiver }}</td>
                                                <td>{{ $item->phoneReceiver }}</td>
                                                <td>{{ $item->shippingTime }}</td>
                                                <td>
                                                    <button class=" btn btn-success" style="float: left"><a
                                                                href="{{ url('admin/order/'.$item->id.'/edit') }}">Edit</a>
                                                    </button>
                                                    {!! Form::open(['method' => 'DELETE','url'=> 'admin/order/'.$item->id]) !!}
                                                    <button class=" btn btn-danger" type="submit" name="btn"
                                                            onclick="return confirm('Are You Sure ?')">Delete
                                                    </button>
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="dataTables_info" id="dataTables-example_info" role="alert"
                                             aria-live="polite" aria-relevant="all">Showing 1 to 10 of 57 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                             id="dataTables-example_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled"
                                                    aria-controls="dataTables-example" tabindex="0"
                                                    id="dataTables-example_previous"><a href="#">Previous</a></li>
                                                <li class="paginate_button active" aria-controls="dataTables-example"
                                                    tabindex="0"><a href="#">1</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example"
                                                    tabindex="0"><a href="#">2</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example"
                                                    tabindex="0"><a href="#">3</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example"
                                                    tabindex="0"><a href="#">4</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example"
                                                    tabindex="0"><a href="#">5</a></li>
                                                <li class="paginate_button " aria-controls="dataTables-example"
                                                    tabindex="0"><a href="#">6</a></li>
                                                <li class="paginate_button next" aria-controls="dataTables-example"
                                                    tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
        <!-- /. ROW  -->
    </div>
@endsection