<x-main>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-5">

                    {{-- Immagine in copertina e Presentazione con barra di ricerca --}}
                    <div class="text-box">
                        <h1>{{__('ui.welcome')}} <span style="color:#F3B61F">Presto.it</span></h1>
                        <p>{{__('ui.sottotitolo')}}</p>

                        <div class="form-search">

                            <form action="{{route('announcements.search')}}" method="GET" class="d-flex">
                                <input name="searched" class="form-control me-2" type="search"  aria-label="Search" placeholder="{{__('ui.cosa_cerchi')}}">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>



                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>

   {{-- sezione crea annuncio --}}
    <header class="py-5 text-white" style="background-color: #0D3B66">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h2 class="fw-bolder display-6 mb-4">{{__('ui.caption')}}</h2>
                        <p class="lead fs-5 mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum nobis dolor neque, aspernatur commodi tempore.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-lg px-4 me-sm-3 fw-semibold fs-5" href="{{route('announcements')}}" style="background-color: #F3B61F">{{__('ui.crea_il_tuo_annuncio')}}</a>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://images.pexels.com/photos/3082341/pexels-photo-3082341.jpeg" alt="..." /></div>
            </div>
        </div>
    </header>

    {{-- sezione Services --}}
    <x-services/>


    {{-- sezione categorie: DA SISTEMARE --}}

    <!-- Swiper -->
  {{-- <div class="ciao">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">Slide 1</div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
          <div class="swiper-slide">Slide 4</div>
          <div class="swiper-slide">Slide 5</div>
          <div class="swiper-slide">Slide 6</div>
          <div class="swiper-slide">Slide 7</div>
          <div class="swiper-slide">Slide 8</div>
          <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
  </div> --}}

     {{-- ------------------------------------ Carosello categorie ----------------------------------  --}}

    {{-- <section class="categories">

        <h1 class="text-center mb-5">Sfoglia le nostre categorie</h1>

        <div class="categories-cards">


            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"></i>
                <div class="carousel-cards">










                </div>

                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>

        </div>

    </section> --}}
{{-- <div class="container"> --}}

    <div class="swiper mySwiper m-5" >
        <div class="swiper-wrapper" >

            <div class="swiper-slide">
                <a href="/categories/1"><img class="image-bho p-1" src="https://images.pexels.com/photos/4841166/pexels-photo-4841166.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img"></a>
            </div>

            <div class="swiper-slide">
                <a href="/categories/2"><img class="image-bho p-1" src="https://images.pexels.com/photos/8170126/pexels-photo-8170126.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img"></a>
            </div>

            <div class="swiper-slide">
                <a href="/categories/3"><img class="image-bho p-1" src="https://images.pexels.com/photos/9704415/pexels-photo-9704415.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img"></a>
            </div>


            <div class="swiper-slide">
                <a href="/categories/4"><img class="image-bho p-1" src="https://images.pexels.com/photos/3394651/pexels-photo-3394651.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img"></a>
            </div>

            <div class="swiper-slide">
                <a href="/categories/5"><img class="image-bho p-1" src="https://images.pexels.com/photos/17264276/pexels-photo-17264276/free-photo-of-legno-casa-modello-finestra.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img"></a>
            </div>

            <div class="swiper-slide">
                <a href="/categories/6"><img class="image-bho p-1" src="https://images.pexels.com/photos/212185/pexels-photo-212185.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img"></a>
            </div>

            <div class="swiper-slide">
                <a href="/categories/7"><img class="image-bho p-1" src="https://images.pexels.com/photos/11118765/pexels-photo-11118765.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img"></a>
            </div>

            <div class="swiper-slide">
                <a href="/categories/8"><img class="image-bho p-1" src="https://images.pexels.com/photos/5693891/pexels-photo-5693891.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img"></a>
            </div>

            <div class="swiper-slide">
                <a href="/categories/9"><img class="image-bho p-1" src="https://images.pexels.com/photos/4147623/pexels-photo-4147623.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img"></a>
            </div>

            <div class="swiper-slide">
                <a href="/categories/10"><img class="image-bho p-1" src="https://images.pexels.com/photos/1983037/pexels-photo-1983037.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img"></a>
            </div>

        </div>
        <div class="mt-5">
            <div class="swiper-pagination "></div>
        </div>
        </div>
    {{-- </div> --}}

      <!-- Swiper JS -->
      {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> --}}
{{--
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      </script>
 --}}





            {{-- sezione ultimi annunci --}}
            <div class="text-center my-4 py-4" style="background-color:#e3f2fd;">
                <h2>Ultimi annunci</h2>

                <div class="container">
                    <div class="col-12 col-md-12 ms-4 p-1">
                        <div class="row">
                            {{-- DA SISTEMARE!!! --}}

                            @foreach($last_announcements as $announcement)
                            @if($announcement->is_accepted)
                            <div class=" col-sm-8 col-md-7 col-lg-5 col-xl-4 col-xxl-3 p-3 ">
                                <div class="card" style="width: 18rem;">
                                    <div>
                                        <img style="max-height:210px; object-fit:cover" src="{{!$announcement->images()->get()->isEmpty() ?  $announcement->images()->first()->getUrl(300,300) : 'https://picsum.photos/300/220' }}" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$announcement->title}}</h5>

                                        <p class="card-title "><a class="a-category text-black" href="{{route('categories.show', $announcement->category)}}">{{$announcement->category->name}}</a></p>

                                        <p class="card-text">{{Illuminate\Support\Str::limit($announcement->description, 90)}}</p>
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text"><em class="text-small">{{$announcement->user->name}}</em></p>
                                            <p class="card-text">{{\Carbon\Carbon::parse($announcement->created_at)->format('d/m/Y')}}</p>
                                        </div>
                                        <p class="card-text text-end fw-semibold"><em>€ {{number_format($announcement->price, 2)}}</em></p>
                                        @guest
                                    <div class="text-center">
                                        <a href="{{route('show.announcement', $announcement)}}" class="btn fs-6" style="background-color: #F3B61F">Visualizza annuncio</a>

                                    </div>
                                    @endguest
                                    @auth
                                    <div class="text-center d-flex justify-content-between align-items-center">

                                        <a href="{{route('show.announcement', $announcement)}}" class="btn fs-6" style="background-color: #F3B61F">Visualizza annuncio</a>
                                        {{-- Like --}}
                                        <livewire:likes :announcement="$announcement"/>

                                    </div>
                                    @endauth
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- sezione lavora con noi --}}
            <div class="py-5 text-white" style="background-color: #0D3B66">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class=" col-lg-4 col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                            <img class="img-fluid rounded-3 my-5" src="https://www.verdefacile.eu/img/cms/azienda-servizi/collabora-con-noi.jpg" alt="..." />
                        </div>

                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-end">
                                <h2 class="fw-bolder display-6 mb-4 text-center text-xl-end">{{__('ui.collabora')}}</h2>
                                <p class="lead fs-5 mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum nobis dolor neque, aspernatur commodi tempore.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-end">
                                    <a class="btn btn-lg px-4 me-sm-3 fw-semibold fs-5" href="{{route('lavoraConNoi')}}" style="background-color: #F3B61F">{{__('ui.diventa_revisore')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>














</x-main>


