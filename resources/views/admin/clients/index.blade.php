@extends('layouts.app')
@section('content')
    <!--breadcrumbs start-->
    <div class="row">
            <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="active">Clientes</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!--breadcrumbs end-->
    <div id="crud" class="section">
        <br>
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
            </ul>
        </div>
        <!--CONTAINER-->

            <!--FLUTUANTE-->

            <!--FLUTUANTE END-->

            <div class="row">
                <div class="col offset-s1 s10">
                    <!--CREATE BUTTON-->

                    <div class="col s2">
                        <a data-target="create" class=
                        "modal-trigger btn-floating btn-large waves-effect waves-light red tooltipped"
                           data-tooltip="Cadastrar cliente" data-position="right" data-delay="50"><i class="material-icons">add</i></a>
                    </div>
                    @include('admin.clients.shared.modal')
                    <!--CREATE BUTTON END-->
                    <!-- PAGE HEADER -->
                    <div class="container">
                        <h3>Clientes</h3>
                    </div>
                    <!-- PAGE HEADER END-->
                <vc-clients></vc-clients>
                </div>

        <!--CONTAINER END-->
    </div>
    {{--<div class="row">--}}
        {{--<div class="col offset-s2 s8">--}}
            {{--{!! $clients->render() !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    <div>
    </div>
@endsection