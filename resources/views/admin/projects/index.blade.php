@extends('layouts.admin')

@section('title', 'All Project')


@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>List of Projects <small></small></h3>
            </div>
            <div class="title_right">
                <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right top_search">
                    <a class="btn btn-default pull-right" href="{{ URL::to('admincon/projects/create') }}">Add Project</a> 
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>All Projects<small></small></h2>
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
                                    <th>Project Name</th>
                                    <th>Project Type</th>
                                    <th>Comments</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                <tr>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->type }}</td>
                                    <td>{{ substr($project->comments, 0, 240) }}</td>
                                    <td>
                                        <a class="btn btn-info btn_list_a" href="{{ URL::Asset('admincon/projects/' . $project->id . '/edit') }}" style="float: left;">
                                            <i class="fa fa-edit "></i><span style="margin-left: 5px;">Edit</span>
                                        </a>
                                        {{ Form::open(array('url' => 'admincon/projects/' . $project->id, 'class' => 'deleteform')) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        <button class="delete btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" type="submit">
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


@endsection