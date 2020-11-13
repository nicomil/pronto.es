@extends('layouts.app')
@section('content')
<div class='container'>
    <div class='row'>
        <div class='col-12 text-center'>
        <h1>Anuncios por categoria: {{$category->name}}</h1>
        </div>
    </div>
    @foreach($announcements as $announcement)
         @include('announcement._announcement')
    @endforeach
    <div class="row my-3">
        <div class="col-12 col-md-8 offset-md-2">
        {{ $announcements->links() }}
        </div>
    </div>
    
</div>
@endsection