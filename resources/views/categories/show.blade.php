<x-main>
    <div class="container my-4">
        <h1>{{$category->name}}</h1>
        <div class="row">

            {{-- @if($announcements->category_id == $category->id) --}}
            @foreach(App\Models\Announcement::all() as $announcement)
            @if($announcement->category->id == $category->id)
            <div class="col-4">
                <div class="card mb-4" style="width: 18rem;">
                    {{-- carosello --}}
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://picsum.photos/300/220" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/301/220" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/302/220" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    {{-- fine carosello --}}

                    <div class="card-body">
                    <h5 class="card-title">{{$announcement->title}}</h5>
                    <p class="card-title "><a class="a-category text-black" href="">{{$announcement->category->name}}</a></p>
                    <p class="card-text">{{$announcement->description}}</p>
                    <p class="card-text text-end"><em>€ {{number_format($announcement->price, 2)}}</em></p>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Visualizza annuncio</a>
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
