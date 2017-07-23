@extends('layouts.admin')
@section('title') News | PHP0317E @endsection
@section('content')
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12" style="padding-left:0px;padding-right: 0px;">
                <h1 class="page-header">
                    News List
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
                                        <a href="{{ url('admin/new/create') }}"> News New</a>
                                    </div>

                                    <div class="col-sm-6 navbar-right">
                                        <div style="float: right;margin-bottom: 10px;">
                                            {!! Form::open(['method' => 'GET','url' => 'admin/new']) !!}
                                            <input type="text" name="keyword" placeholder="Type you word ..." @if(Request::has('keyword')) value="{{ Request::get('keyword') }}" @endif() />
                                            <input type="submit" value="Search" />
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                                <table border="1" style="table-layout: fixed;width: 100%;" class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;width:50px;">STT</th>
                                            <th style="text-align: center;width:50px;">ID</th>
                                            <th style="text-align: center;width: 150px;">Subject </th>
                                            <th style="text-align: center;">Content</th>
                                            <th style="text-align: center;width: 142px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($news)
                                            @foreach($news as $key => $item)
                                                <tr style="text-align: center;">
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $item->id}}</td>
                                                    <td style="word-wrap: break-word;overflow-wrap: break-word;text-align: justify;">{{ $item->subject}}</td>
                                                    <td style="word-wrap: break-word;overflow-wrap: break-word;text-align: justify;">{{ $item->content }}</td>
                                                    <td>
                                                        <button class=" btn btn-success" style="float: left;" ><a href="{{ url('admin/new/'.$item->id.'/edit') }}">Edit</a></button>
                                                        {!! Form::open(['method' => 'DELETE','url'=> 'admin/new/'.$item->id]) !!}
                                                        <button class=" btn btn-danger" type="submit" name="btn" onclick="return confirm('Are You Sure ?')">Delete</button>
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
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