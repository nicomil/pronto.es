@extends('layouts.app')
@section('content')
<div class='container'>
    <div class='row'>
        <div class='col-12 text-center'>
            <h1>Bienvenidos a Pronto.es</h1>
        </div>
    </div>
    @foreach($announcements as $announcement)
        @include('announcement._announcement')
    @endforeach
</div>
@endsection