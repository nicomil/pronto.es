@extends('layouts.app')
@section('content')
<div class='container'>
    <div class='row'>
        <div class='col-12 text-center'>
        <h1>{{__('Bienvenidos a Pronto.es')}}</h1>
        <h2>{{__("Lorem ipsum dolor sit amet consectetur, adipisicing elit.")}}</h2>
        </div>
    </div>
    <div class="row my-3">
    @foreach($announcements as $announcement)
        @include('announcement._announcement')
    @endforeach
    </div>
</div>
@endsection