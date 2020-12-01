@extends('layouts.app')
@section('content')
<section class="row">
    <div class="col-12 col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                Nuevo anuncio (Secret: {{$uniqueSecret}})
            </div>
            <div class="card-body">
                <form method="POST" action='{{route("announcement.create")}}'>
                @csrf
                <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
                    <div class="form-group">
                        <label for="categories">Categorias</label>
                        <select class="form-control" id="categories" name="category">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" 
                                    {{old('category') == $category->id ? 'selected' : ''}}
                                >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="announcementName">Titulo</label>
                        <input type="text" class="form-control" id="announcementName" aria-describedby="titleHelp" name="title" value="{{old("title")}}">
                        @error('title')
                        <small id="titleHelp" class="form-text" style="color:red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="announcementBody">Anuncio</label>
                        <textarea class="form-control" name="body" id="announcementBody" cols="30"
                            rows="10" aria-describedby="bodyHelp">{{old("body")}}</textarea>
                        @error('body')
                            <small id="bodyHelp" class="form-text" style="color:red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="announcementPrice">Precio</label>
                        <input type="number" step="0.01" class="form-control" id="announcementPrice" aria-describedby="priceHelp" name="price" value="{{old("price")}}">
                        @error('price')
                        <small id="priceHelp" class="form-text" style="color:red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="announcementeImages">Imagenes</label>
                        <div class="dropzone" id="drophere"></div>
                        @error('images')
                            <small id="Help" class="form-text" style="color:red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
