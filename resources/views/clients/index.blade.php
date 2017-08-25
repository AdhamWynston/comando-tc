@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            <table class="highlight" border="1">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td>{{$client->id}}</td>
                                        <td>{{$client->name}}</td>
                                        <td>
                                            <a href="{{route('clients.edit',['id'=>$client->id])}}" class="tooltipped waves-effect waves-circle waves-light btn-floating blue" data-tooltip="Visualizar cliente" data-position="top" data-delay="50"><i class="material-icons">remove_red_eye</i></a>
                                            <a href="{{route('clients.edit',['id'=>$client->id])}}" class="tooltipped waves-effect waves-circle waves-light btn-floating orange" data-tooltip="Editar cliente" data-position="top" data-delay="50"><i class="material-icons">edit</i></a>
                                            @if($client->status == 0)
                                                <a href="" class="tooltipped waves-effect waves-circle waves-light btn-floating green" data-tooltip="Editar cliente" data-position="top" data-delay="50"><i class="material-icons">lock_open</i></a>
                                            @else
                                                <a href="" class="tooltipped waves-effect waves-circle waves-light btn-floating red" data-tooltip="Editar cliente" data-position="top" data-delay="50"><i class="material-icons">lock_outline</i></a>
                                            @endif
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
@endsection
