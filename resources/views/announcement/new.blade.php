@extends('layouts.app')
@section('content')
<section class="row">
    <div class="col-12 col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                Nuevo anuncio
            </div>
            <div class="card-body">
                <form method="POST" action='{{route("announcement.create")}}'>
                    @csrf
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
                        <label for="announcementeName">Titulo</label>
                        <input type="text" class="form-control" id="announcementeName" aria-describedby="emailHelp"
                    name="title" value="{{old("title")}}">
                        @error('title')
                        <small id="emailHelp" class="form-text" style="color:red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="announcementeBody">Anuncio</label>
                        <textarea class="form-control" name="body" id="announcementeBody" cols="30"
                            rows="10">{{old("body")}}</textarea>
                        @error('body')
                            <small id="emailHelp" class="form-text" style="color:red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
