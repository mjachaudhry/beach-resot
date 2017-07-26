@extends('layouts.admin')

@section('title', 'All Services')

@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>List of Services <small></small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right top_search">
                    <a class="btn btn-default pull-right" href="{{ URL::to('admincon/services/create') }}">Add Service</a> 
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>All Services<small></small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                        @endif
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                <tr>
                                    <th> Title </th>
                                    
                                    <th> Actions </th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                <tr class="odd gradeX">
                                    <td style="width: 15%;"> {{ $service->title }} </td>
                                    
                                    <td width="15%">
                                        <a style="float: left;" class="btn btn-info btn_list_a" href="{{ URL::Asset('admincon/services/' . $service->id . '/edit') }}">
                                            <i class="fa fa-edit "></i><span style="margin-left: 5px;">Edit</span>
                                        </a> 
                                        {{ Form::open(array('url' => 'admincon/services/' . $service->id, 'class' => 'deleteform')) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        <button  class="delete btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" type="submit">
                                            <i class="fa fa-trash-o"></i>
                                            Delete
                                        </button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    function ConfirmDelete()
    {
        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            return false;
    }

</script>
@endsection