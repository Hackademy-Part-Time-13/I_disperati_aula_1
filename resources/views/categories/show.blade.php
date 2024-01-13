<x-main>
    <div class="container my-4">
        <h1>{{$category->name}}</h1>
        <div class="row">

            {{-- @if($announcements->category_id == $category->id) --}}
            @foreach(App\Models\Announcement::all() as $announcement)
            @if($announcement->category->id == $category->id)
            <div class="col-sm-8 col-md-7 col-lg-5 col-xl-4 col-xxl-3 p-3">
                <div class="card mb-4" style="width: 18rem;">
                  <img src="https://picsum.photos/300/220" class="card-img-top" alt="...">

                    <div class="card-body">
                    <h5 class="card-title">{{$announcement->title}}</h5>
                    <p class="card-title "><a class="a-category text-black" href="">{{$announcement->category->name}}</a></p>
                    <p class="card-text">{{$announcement->description}}</p>
                    <p class="card-text text-end"><em>€ {{number_format($announcement->price, 2)}}</em></p>
                    <div class="text-center">
                        <a href="{{route('show.announcement', $announcement)}}" class="btn btn-primary">Visualizza annuncio</a>
                    </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            {{-- @endif --}}
        </div>
    </div>
</x-main>
