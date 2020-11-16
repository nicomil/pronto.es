@extends('layouts.app')
@section('content')
<div class='container'>
    @if($announcement)
    <div class='row my-4'>
        <div class='col-12'>
            <div class="card">
                <div class="card-header">
                    Anuncion #{{$announcement->id}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Usuario</h3>
                        </div>
                        <div class="col-md-9">
                            #{{$announcement->user->id}}
                            {{$announcement->user->name}}
                            {{$announcement->user->email}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Titulo</h3>
                        </div>
                        <div class="col-md-9">
                            {{$announcement->title}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Descripción</h3>
                        </div>
                        <div class="col-md-9">
                            {{$announcement->body}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Imagenes</h3>
                        </div>
                        <div class="col-md-9">
                            <img src="https://via.placeholder.com/150" alt="">
                            <img src="https://via.placeholder.com/150" alt="">
                            <img src="https://via.placeholder.com/150" alt="">
                            <img src="https://via.placeholder.com/150" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
        <form action="{{route('revisor.announcement.reject',['id'=>$announcement->id])}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Rechazar</button>
        </form>
        </div>
        <div class="col-md-6 text-right">
            <form action="{{route('revisor.announcement.accept',['id'=>$announcement->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Acceptar</button>
            </form>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-12">
            <h3>No hay ningun anuncio para revisar.</h3>
        </div>
    </div>
    @endif
</div>
@endsection