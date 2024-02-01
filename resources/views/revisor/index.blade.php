<x-main title="Dashboard revisore ">

    <div class="container my-4">
        {{-- prima sezione --}}
        <h1 class="display-6 text-center">
            {{ $announcement_to_check ? 'Ecco gli annunci da revisionare' : 'Non ci sono annunci da revisionare per questo utente' }}
        </h1>
        {{-- <h1>{{$announcement->title}}</h1> --}}


        {{-- @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
        @endif --}}

        {{-- @if (session()->has('error'))
        <div class="alert alert-success" role="alert">
            {{session('error')}}
        </div>
        @endif --}}

        @if ($announcement_to_check)

            {{-- seconda sezione --}}
            <div class="row">

                <div class="col-12 my-5">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mt-5 mb-5 fs-2 text-center text-uppercase">
                            {{ $announcement_to_check->title }}</h5>
                        <p class="card-title fs-6 btn btn-primary mb-2" style="background-color:#e3f2fd; border:none"><a
                                class="text-black a-category"
                                href="{{ route('categories.show', $announcement_to_check->category) }}">{{ $announcement_to_check->category->name }}</a>
                        </p>
                        <p class="card-text fs-6 my-4 " style="text-align: justify">
                            {{ $announcement_to_check->description }}</p>

                        <div class="d-flex justify-content-between">
                            <p class="card-text text-start fw-bold fs-4"><em>€
                                    {{ number_format($announcement_to_check->price, 2) }}</em></p>
                        </div>

                        <p class="card-text text-end mt-3">
                            Annuncio creato:
                            {{ \Carbon\Carbon::parse($announcement_to_check->created_at)->format('d/m/Y') }}
                            <br> da
                            <span class="fw-bold">
                                <em>
                                    {{ $announcement_to_check->user->name }}
                                </em>
                            </span>
                        </p>


                        {{-- <p class="card-text text-end">{{$announcement->user->name}}</p> --}}
                    </div>
                </div>

                <div class="col-12">

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($announcement_to_check->images as $image)
                                <div class="swiper-slide">
                                    <div class="row">

                                        <div class="col-6">
                                            <img class="img" src="{{ $image->getUrl(300, 300) }}" alt="">
                                        </div>
                                        <div class="col-6">
                                            @foreach ($image->labels as $label)
                                                <p class="d-inline">{{ $label }}</p>
                                                @endforeach

                                                <div class="col-md-5">
                                                    <div class="card-body">
                                                        <h5 class="tc-accent">Revisione Immagini</h5>
                                                        <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                                                        <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                                                        <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                                                        <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                                                        <p>Contenuto ammiccante: <span class="{{ $image->racy }}"></span></p>
                                                    </div>
                                                </div>

                                            </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>


                </div>

                {{-- parte da sistemare con semafori --}}




            </div>

            {{-- terza sezione con i maledetti bottoni --}}
            <div class="row">
                <div class="col-12 col-md-6">
                    <form
                        action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success shadow">Accetta</button>
                    </form>
                </div>

                <div class="col-12 col-md-6 text-end">
                    <form
                        action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                    </form>
                </div>
            </div>
        @endif
    </div>



</x-main>
