<x-main>
    <div class="container my-4">
        <h1>Annunci</h1>
        <div class="row">

            @foreach($announcements as $announcement)

            <div class="col-4 p-3">
            <div class="card" style="width: 18rem;">
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



                    {{-- <div class="card-body">
                    <h5 class="card-title">{{$announcement->title}}</h5>
                    <p class="card-title "><a class="a-category text-black" href="">{{$announcement->category->name}}</a></p>
                    <p class="card-text">{{$announcement->description}}</p>
                    <p class="card-text text-end"><em>€ {{number_format($announcement->price, 2)}}</em></p>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
            </div> --}}

            @endforeach

        </div>
    </div>
</x-main>
