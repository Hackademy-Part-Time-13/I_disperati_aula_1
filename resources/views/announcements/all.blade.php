    <x-main>

        <div class="row ms-2 mt-4">

            <div class="col-2 mt-5 ">

                <h3 class="mt-3 mb-4">Filtri di ricerca</h3>

                <form action="{{route('announcements.search')}}" method="GET" class="d-flex">
                    <input name="searched" class="form-control me-2" type="search"  aria-label="Search">
                    <button class="btn text-white" style="background-color: #0D3B66;  " type="submit">Cerca</button>
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
            </div>



            <div class="col-9 ms-4">

                <div class="">




                @if(Route::currentRouteName() == 'all.announcements')
                <h1 class="">Annunci</h1>
                @elseif(Route::currentRouteName() == 'announcements.search')
                @if($announcements->count() > 0)

                <h1 class="">Annunci trovati</h1>
                @else
                <h1 class="">Non ci sono annunci in questa ricerca. Riprova.</h1>

                {{-- @elseif(!$announcements)
                    <div class="col-12">
                        <div class="alert alert-danger mt-3">
                            <h1 class="my-4">Non ci sono annunci in questa ricerca. Riprova.</h1>
                        </div>
                    </div> --}}
                    @endif
                    @endif

                    {{-- <div id="myBtnContainer">
                        <button class="btn active" onclick="filterSelection('all')"> Mostra tutti</button>
                        <button class="btn" onclick="filterSelection('macchine')"> Macchine</button>
                        <button class="btn" onclick="filterSelection('animali')"> Animali</button>
                        <button class="btn" onclick="filterSelection('frutti')"> Frutti</button>
                        <button class="btn" onclick="filterSelection('colori')"> Colori</button>
                    </div>

                    <div class="container">
                        <div class="filterDiv macchine">BMW</div>
                        <div class="filterDiv frutti">Arancia</div>
                        <div class="filterDiv macchine">Volvo</div>
                        <div class="filterDiv colori">Rosso</div>
                        <div class="filterDiv animali">Cavallo</div>
                        <div class="filterDiv macchine">Audi</div>
                        <div class="filterDiv colori">Blu</div>
                        <div class="filterDiv animali">Gatto</div>
                        <div class="filterDiv animali">Cane</div>
                        <div class="filterDiv frutti">Melone</div>
                        <div class="filterDiv frutti">Kiwi</div>
                        <div class="filterDiv frutti">Banana</div>
                        <div class="filterDiv frutti">Limone</div>
                        <div class="filterDiv animali">Tigre</div>
                        <div class="filterDiv colori">Arancione</div>
                        <div class="filterDiv colori">Giallo</div>

                    </div> --}}





                    <div class="row">


                        @foreach($announcements as $announcement)
                        @if($announcement->is_accepted)
                        <div class=" col-sm-8 col-md-7 col-lg-5 col-xl-4 col-xxl-3 p-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://picsum.photos/300/220" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$announcement->title}}</h5>
                                    
                                    <p class="card-title "><a class="a-category text-black" href="{{route('categories.show', $announcement->category)}}">{{$announcement->category->name}}</a></p>
                                    
                                    <p class="card-text">{{Illuminate\Support\Str::limit($announcement->description, 100)}}</p>
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
