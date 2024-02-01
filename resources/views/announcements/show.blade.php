<x-main title="{{ $announcement->title }}">

    <div class="container box-product">

        <!-- Dettaglio prodotto -->

        <!-- Inizio row dettaglio prodotto -->
        <div class="row justify-content-center pt-5">


            @if ($announcement->images->isNotEmpty())
                <div class="col-md-4">

                    {{-- @if (!$announcement->images->isEmpty()) --}}
                    {{-- immagine principale --}}
                    {{-- @foreach ($announcement->images as $image) --}}

                    <img class="img" src="{{ $announcement->images->first()->getUrl(300, 300) }}" alt=""
                        id="productImg" onclick()>
                    {{-- @endforeach --}}

                    {{-- immagini piccole da selezionare --}}
                    <div class= "img-select">

                        @foreach ($announcement->images as $image)
                            <div class= "img-item">
                                <img src = "{{ $image->getUrl(300, 300) }}" alt = "..." class="small-img" onclick()>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endif


            {{-- colonna destra --}}
            <div class="col-md-6 ms-2">

                <h1 class=" mt-5 mb-3">{{ $announcement->title }}</h1>




                <div class="box-details">
                    {{-- rating --}}
                    <div class= "product-rating mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class= "fas fa-star-half-alt"></i>
                    </div>

                    {{-- data di creazione --}}
                    <p class="card-text">{{ __('ui.creazione') }}
                        {{ \Carbon\Carbon::parse($announcement->created_at)->format('d/m/Y') }} {{ __('ui.da') }}
                        <span class="fw-bold "><em>{{ $announcement->user->name }}</em></span>
                    </p>


                </div>

                {{-- prezzo --}}
                <p class="card-text text-start fw-bold fs-4">€ {{ number_format($announcement->price, 2) }}</p>

                <span class="badge rounded-pill mb-3" style="background-color: #0D3B66;"><a
                        class="text-white a-category"
                        href="{{ route('categories.show', $announcement->category) }}">{{ $announcement->category->name }}</a></span>

                {{-- descrizione del prodotto  --}}
                <p>{{ $announcement->description }}</p>

                {{-- sezione acquisti --}}
                <div class="product-purchase">



                    <div class="purchase-info">
                        {{-- <input type="number" min="0" value="1"> --}}

                        <button type="button" class ="btn">
                            {{ __('ui.aggiungi_carrello') }} <i class="fa-solid fa-cart-shopping"></i>
                        </button>

                        {{-- <button type="button" class="btn">{{__('ui.aggiungi_preferiti')}} <i class="fa-regular fa-heart"></i></button> --}}
                        @auth
                            <button type="button"
                                class="btn d-flex justify-content-center ps-3">{{ __('ui.aggiungi_preferiti') }} <i
                                    class="btnlike">
                                    <livewire:likes :announcement="$announcement" />
                                </i>
                            </button>
                        @endauth
                    </div>

                </div>
                {{-- fine sezione acquisti --}}

            </div>
            {{-- fine colonna destra  --}}



        </div>
        {{-- fine row dettaglio prodotto --}}


        <div class="text-center my-4 py-4 ">
            <h2 class="mt-5">Ultimi annunci</h2>

            <div class="container">
                <div class="col-12 col-md-12 ms-4 p-1">
                    <div class="row">
                        {{-- DA SISTEMARE!!! --}}

                        @foreach ($last_announcements as $announcement)
                            @if ($announcement->is_accepted)
                                <div class=" col-sm-8 col-md-7 col-lg-5 col-xl-4 col-xxl-3 p-3 ">
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img style="max-height:210px; object-fit:cover"
                                                src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(300, 300): 'https://picsum.photos/300/220' }}"
                                                class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $announcement->title }}</h5>

                                            <p class="card-title "><a class="a-category text-black"
                                                    href="{{ route('categories.show', $announcement->category) }}">{{ $announcement->category->name }}</a>
                                            </p>

                                            <p class="card-text">
                                                {{ Illuminate\Support\Str::limit($announcement->description, 90) }}</p>
                                            <div class="d-flex justify-content-between">
                                                <p class="card-text"><em
                                                        class="text-small">{{ $announcement->user->name }}</em></p>
                                                <p class="card-text">
                                                    {{ \Carbon\Carbon::parse($announcement->created_at)->format('d/m/Y') }}
                                                </p>
                                            </div>
                                            <p class="card-text text-end fw-semibold"><em>€
                                                    {{ number_format($announcement->price, 2) }}</em></p>
                                            @guest
                                                <div class="text-center">
                                                    <a href="{{ route('show.announcement', $announcement) }}"
                                                        class="btn fs-6" style="background-color: #F3B61F">Visualizza
                                                        annuncio</a>

                                                </div>
                                            @endguest
                                            @auth
                                                <div class="text-center d-flex justify-content-between align-items-center">

                                                    <a href="{{ route('show.announcement', $announcement) }}"
                                                        class="btn fs-6" style="background-color: #F3B61F">Visualizza
                                                        annuncio</a>
                                                    {{-- Like --}}
                                                    <livewire:likes :announcement="$announcement" />

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

    </div>
    <!-- fine container -->

</x-main>
