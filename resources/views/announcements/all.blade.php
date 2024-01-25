    <x-main>

        <div class="row ms-2 mt-4 mb-5">

            <div class="col-12 col-md-3 mt-5">

                <h3 class="mt-3 mb-4">{{__('ui.filtri_di_ricerca')}}</h3>

                <form action="{{route('announcements.search')}}" method="GET" class="d-flex">
                    <input name="searched" class="form-control me-2" type="search"  aria-label="Search">
                    <button class="btn text-white" style="background-color: #0D3B66;  " type="submit">{{__('ui.cerca')}}</button>
                </form>

                {{-- <div class=" dropdown btn mt-2" style="background-color:#e3f2fd ">
                    <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach(App\Models\Category::all() as $category)
                        <li><a class="dropdown-item a-category" href="{{route('categories.show', $category)}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div> --}}

                <div class="left">
                    <div class="sidebar">
                        {{-- tipologia --}}
                        <h6>{{__('ui.tipologia')}}</h6>
                        <div class="filter">
                            <input type="checkbox"> <p>{{__('ui.nuovo')}}</p> <span>(0)</span>
                        </div>
                        <div class="filter">
                            <input type="checkbox"> <p>{{__('ui.usato')}}</p> <span>(0)</span>
                        </div>
                        <div class="filter">
                            <input type="checkbox"> <p>{{__('ui.consegna')}}</p> <span>(0)</span>
                        </div>
                        <div class="filter">
                            <input type="checkbox"> <p>{{__('ui.spedizione')}}</p> <span>(0)</span>
                        </div>

                        {{-- categorie --}}
                        <h6>Categorie</h6>
                        <div class="filter">
                            <input type="checkbox"> <p>Libri</p> <span>(0)</span>
                        </div>
                        <div class="filter">
                            <input type="checkbox"> <p>Musica</p> <span>(0)</span>
                        </div>
                        <div class="filter">
                            <input type="checkbox"> <p>console</p> <span>(0)</span>
                        </div>
                        <div class="filter">
                            <input type="checkbox"> <p>Elettronica & Informatica</p> <span>(0)</span>
                        </div>
                        <div class="filter">
                            <input type="checkbox"> <p>Arredamento</p> <span>(0)</span>
                        </div>
                        <div class="filter">
                            <input type="checkbox"> <p>Giardino</p> <span>(0)</span>
                        </div>
                        <div class="filter">
                            <input type="checkbox"> <p>Bellezza & Salute</p> <span>(0)</span>
                        </div>
                        <div class="filter">
                            <input type="checkbox"> <p>Abbigliamento</p> <span>(0)</span>
                        </div>
                        <div class="filter">
                            <input type="checkbox"> <p>Auto & Moto</p> <span>(0)</span>
                        </div>
                        <div class="filter">
                            <input type="checkbox"> <p>Oggettistica</p> <span>(0)</span>
                        </div>

                    </div>
                </div>
            </div>



            <div class="col-4 col-md-8 ms-4">

                <div class="">

                    @if(Route::currentRouteName() == 'all.announcements')
                    <h1 class="mt-md-4">Annunci</h1>
                    @elseif(Route::currentRouteName() == 'announcements.search')
                    @if($announcements->count() > 0)

                    <h1 class="">{{__('ui.annunci_trovati')}}</h1>
                    @else
                    <h1 class="">{{__('ui.errore_ricerca')}}</h1>

                    @endif
                    @endif

                    <div class="row">


                        @foreach($announcements as $announcement)
                        @if($announcement->is_accepted)
                        <div class=" col-sm-8 col-md-7 col-lg-5 col-xl-4 col-xxl-3 p-3 announcement">
                            <div class="card" style="width: 18rem;">
                                <div>
                                    <img style="max-height:210px; object-fit:cover" src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) /* $announcement->images()->first()->getUrl(300,300) */ : 'https://picsum.photos/300/220' }}" class="card-img-top" alt="...">                                
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
                                    <div class="text-center">
                                        <a href="{{route('show.announcement', $announcement)}}" class="btn fs-6" style="background-color: #F3B61F">Visualizza annuncio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        {{ $announcements->links() }}
                    </div>
                </div>

            </div>


        </div>



    </x-main>
