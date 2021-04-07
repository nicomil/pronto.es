@extends('layouts.app')
@section('content')
<div class='container'>
    <div class='row'>
        <div class='col-12 text-center'>
        <h1>{{__('Bienvenidos a Pronto.es')}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">

            <form action="{{ route('search') }}" method="GET" class="mb-5 mt-5">
                <input type="text" name="q" style="width:500px;" placeholder="Buscar..">
                <button class="btn btn-danger" type="submit">Buscar</button>
            </form>
            
        </div>
    </div>
    <div class="row my-3">
    @foreach($announcements as $announcement)
        @include('announcement._announcement')
    @endforeach
    </div>
</div>
@endsection