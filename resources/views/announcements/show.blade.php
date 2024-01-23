<x-main title="{{$announcement->title}}">

    <div class="container my-4">

        <div class="row">
            <div class="col-6">

                <section>
                    <div class="container-carousel">
                        <div class="carousel-01">
                            <input type="radio" name="slides" checked="checked" id="slide-1">
                            <input type="radio" name="slides" id="slide-2">
                            <input type="radio" name="slides" id="slide-3">
                            <input type="radio" name="slides" id="slide-4">
                            <input type="radio" name="slides" id="slide-5">
                            <input type="radio" name="slides" id="slide-6">
                            <ul class="carousel__slides">
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="https://picsum.photos/id/1041/800/450" alt="">
                                        </div>

                                    </figure>
                                </li>
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="https://picsum.photos/id/1043/800/450" alt="">
                                        </div>

                                    </figure>
                                </li>
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="https://picsum.photos/id/1044/800/450" alt="">
                                        </div>

                                    </figure>
                                </li>
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="https://picsum.photos/id/1045/800/450" alt="">
                                        </div>
                                    </figure>
                                </li>
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="https://picsum.photos/id/1049/800/450" alt="">
                                        </div>

                                    </figure>
                                </li>
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="https://picsum.photos/id/1052/800/450" alt="">
                                        </div>

                                    </figure>
                                </li>
                            </ul>
                            <ul class="carousel__thumbnails">
                                <li>
                                    <label for="slide-1"><img src="https://picsum.photos/id/1041/150/150" alt=""></label>
                                </li>
                                <li>
                                    <label for="slide-2"><img src="https://picsum.photos/id/1043/150/150" alt=""></label>
                                </li>
                                <li>
                                    <label for="slide-3"><img src="https://picsum.photos/id/1044/150/150" alt=""></label>
                                </li>
                                <li>
                                    <label for="slide-4"><img src="https://picsum.photos/id/1045/150/150" alt=""></label>
                                </li>
                                <li>
                                    <label for="slide-5"><img src="https://picsum.photos/id/1049/150/150" alt=""></label>
                                </li>
                                <li>
                                    <label for="slide-6"><img src="https://picsum.photos/id/1052/150/150" alt=""></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>



            <div class="col-6 my-5">
                <div class="card-body">
                    <h5 class="card-title fw-bold mt-3 mb-5 fs-2 text-center text-uppercase">{{$announcement->title}}</h5>
                    <p class="card-title fs-6 btn btn-primary " style="background-color:#e3f2fd; border:none"><a class="text-black a-category" href="{{route('categories.show', $announcement->category)}}">{{$announcement->category->name}}</a></p>
                    <p class="card-text fs-6 my-4">{{$announcement->description}}</p>


                    <div class="d-flex justify-content-between">
                        <p class="card-text text-start fw-bold fs-4"><em>€ {{number_format($announcement->price, 2)}}</em></p>
                        <div>
                            {{-- da aggiungere componente livewire preferiti --}}
                            <button class="btn" style="background-color:#e3f2fd; border:none">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                </svg>

                            </button>
                            <button type="button" class="btn" style="background-color:#e3f2fd; border:none"><i class="fa-solid fa-cart-shopping"></i> Aggiungi al carrello</button>
                        </div>


                    </div>

                    <p class="card-text text-end mt-5">Annuncio creato: {{\Carbon\Carbon::parse($announcement->created_at)->format('d/m/Y')}} da <span class="fw-bold "><em>{{$announcement->user->name}}</em></span></p>
                    {{-- <p class="card-text text-end">{{$announcement->user->name}}</p> --}}
                </div>
            </div>
        </div>
    </div>




</x-main>
