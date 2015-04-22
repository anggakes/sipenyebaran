@extends('gishome')

@section('content')
<div style="min-height:300px; position:relative; top:65px;">
	<div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$proyek}}</div>
                        <div>Proyek</div>
                    </div>
                </div>
            </div>
            <a href="{{url('/proyek')}}">
                <div class="panel-footer">
                    <span class="pull-left">Kelola Data Proyek dan Lokasi</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$kontraktor}}</div>
                                    <div>Kontraktor</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('/kontraktor')}}">
                            <div class="panel-footer">
                                <span class="pull-left">Kelola Data Kontraktor</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
<div>
@stop