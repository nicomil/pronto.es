
    <div class="col-12 col-md-5 offset-md-1">
        <div class="card">
            <div class="card-header">
                {{$announcement->title}}
            </div>
            <div class="car-body d-flex flex-column">
                <div>
                    @include('announcement._announcement_carousel')
                </div>
                <p class="p-4">
                {{$announcement->body}}
                </p>
            </div>
            <div class="card-footer d-flex justify-content-between">
            <div>
                <strong>Precio: {{$announcement->price}}</strong>
                <br>
                <strong>Categoria: <a href="{{route('category.announcements',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">{{$announcement->category->name}}</a></strong>
            </div>
            <i>{{$announcement->created_at->format('d/m/Y')}} - {{$announcement->user->name}}</i>
            </div>
        </div>
    </div>
