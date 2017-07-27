@extends('layouts.admin')

@section('title', 'New Project')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Projects</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Project <small>&nbsp;</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                        @elseif($errors->count()>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            {{ $error }}
                            <br/>
                            @endforeach
                        </div>
                        @elseif(Session::has('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                        @endif					



                        {!! Form::model($projects, ['action' => 'admin\ProjectsController@store' , 'class' => 'form-horizontal form-label-left', 'onsubmit' => 'return submitForm();', 'files' => 'true']) !!}

                        <div class="form-group">
                            <div class="control-label col-md-3 col-sm-3 col-xs-12">
                                {!! Form::label('ltitle', 'Project Name *') !!}
                            </div>
                            <div class = "col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('name', '', ['required','class' => 'form-control col-md-7 col-xs-12','placeholder'=>'Enter Project Name']) !!}
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="control-label col-md-3 col-sm-3 col-xs-12">
                                {!! Form::label('limage', 'Project Type *') !!}
                                
                            </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            {!!  Form::select('type', ['Residential' => 'Residential', 'Commercial' => 'Commercial', 'Other' => 'Other'],  'Residential', ['class' => 'form-control' ]) !!}
                        
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="control-label col-md-3 col-sm-3 col-xs-12">
                                {!! Form::label('limage', 'Services *') !!}
                                
                            </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            
                            @foreach($services as $service)
                                <div class = "col-md-6 col-sm-6 col-xs-12">  

                                    {{ Form::checkbox('service[]', $service->id) }}
                                    <span>{{ $service->title }}</span>
                                
                                </div>
                            @endforeach
                            
                                 
                        </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <div class="control-label col-md-3 col-sm-3 col-xs-12">
                                {!! Form::label('details', 'Comments ') !!}
                            </div>
                            <div class = "col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('comments', '', ['class' => 'form-control col-md-4 col-xs-6','placeholder'=>'Enter Comments']) !!}
                            </div>
                        </div>
                        

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                {!! Form::submit('Create Project',['class'=>'btn btn-success'])!!}
                                <a href="{{URL::to("admincon/projects/")}}">
                                    <button type="button" class="btn default">Cancel</button>
                                </a>
                            </div>
                        </div>
                        

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection

