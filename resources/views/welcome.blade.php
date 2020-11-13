@extends('layouts.app')
@section('content')
<div class='container'>
    <div class='row'>
        <div class='col-12 text-center'>
            <h1>Bienvenidos a Pronto.es</h1>
        </div>
    </div>
    @foreach($announcements as $announcement)
    <div class="row my-3">
        <div class="col-12 col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    {{$announcement->title}}
                </div>
                <div class="car-body d-flex">
                    <img src="https://via.placeholder.com/150" alt="">
                    <p>
                    {{$announcement->body}}
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                <strong>Categoria: <a href="#">{{$announcement->category->name}}</a></strong>
                <i>{{$announcement->created_at->format('d/m/Y')}} - {{$announcement->user->name}}</i>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection