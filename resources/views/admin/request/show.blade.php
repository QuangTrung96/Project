@extends('layouts.admin')
@section('title') Request | PHP0317E @endsection
@section('content')
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12" style="padding-left:0px;padding-right: 0px;">
                <h1 class="page-header">
                    Request List
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
            <div class="col-md-12" style="padding-left:0px;padding-right: 0px;">
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
                                        <a href="{{ url('admin/request/create') }}"> Create New</a>
                                    </div>

                                    <div class="col-sm-6 navbar-right">
                                        <div style="float: right">
                                            {!! Form::open(['method' => 'GET','url' => 'admin/request']) !!}
                                            <input type="text" name="keyword" placeholder="Type you word ..." @if(Request::has('keyword')) value="{{ Request::get('keyword') }}" @endif() />
                                            <input type="submit" value="Search" />
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-hover dataTable no-footer"
                                       id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                    <tr>
                                        <th style="width: 30px;text-align: center;">
                                            STT
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending"
                                            style="width: 30px;text-align: center;">Subject
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 150px;text-align: center;">Detail
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 100px;text-align: center;">Date
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 50px;text-align: center;">User ID
                                        </th>
                                        <th  tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending"
                                            style="width: 95px;text-align: center;">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @if($request)
                                            @foreach($request as $key => $item)
                                                <tr style="text-align: center;">
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $item->id}}</td>
                                                    <td>{{ $item->subject}}</td>
                                                    <td>{{ $item->detail }}</td>
                                                    <td>{{ $item->date }}</td>
                                                    <td>{{ $item->user_id }}</td>
                                                    <td>
                                                        <button class=" btn btn-success" style="float: left" ><a href="{{ url('admin/request/'.$item->id.'/edit') }}">Edit</a></button>
                                                        {!! Form::open(['method' => 'DELETE','url'=> 'admin/request/'.$item->id]) !!}
                                                        <button class=" btn btn-danger" type="submit" name="btn" onclick="return confirm('Are You Sure ?')">Delete</button>
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