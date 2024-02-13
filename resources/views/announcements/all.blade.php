    <x-main title="Annunci">
        <div class="container-fluid">
            <div class="row ms-2 mt-4 mb-5">
                
                <div class="col-12 col-md-3 mt-5">
                    {{-- sezione ricerca --}}
                    <h3 class="mt-3 mb-4">{{__('ui.filtri_di_ricerca')}}</h3>
                    
                    {{-- barra di ricerca --}}
                    <form action="{{route('announcements.search')}}" method="GET" class="d-flex">
                        <input name="searched" class="form-control me-2" type="search"  aria-label="Search">
                        <button class="btn text-white" style="background-color: #0D3B66;  " type="submit">{{__('ui.cerca')}}</button>
                    </form>
                    {{-- fine barra di ricerca --}}
                    
                    <div class="left">
                        <div class="sidebar" style="background-color: #e3f2fd">
                            {{-- categorie --}}
                            <h6>Categorie</h6>
                            @foreach(App\Models\Category::all() as $category)
                            <div class="filter p-2">
                                <a class="dropdown-item a-category" href="{{route('categories.show', $category)}}">{{$category->name}}</a>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                {{-- fine sezione ricerca --}}

                <div class="col-8 col-md-8 ms-4 p-1">
                    @if(Route::currentRouteName() == 'all.announcements')
                        <h1 class="mt-md-4">Annunci</h1>
                    @elseif(Route::currentRouteName() == 'announcements.search')
                        @if($announcements->count() > 0)
                            <h1 class="">{{__('ui.annunci_trovati')}}  {{ Request::get('searched') }} </h1>
                        @else
                            <h1 class="">{{__('ui.errore_ricerca')}}</h1>
                    
                        @endif
                    @endif
                    {{-- sezione annunci --}}
                    <div class="row">
                        {{-- card annuncio --}}
                        @foreach($announcements as $announcement)
                        @if($announcement->is_accepted)
                        <div class=" col-sm-8 col-md-7 col-lg-5 col-xl-4 col-xxl-4 p-3 ">
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
                        {{ $announcements->links() }}
                    </div>
                </div>
            </div>
        </div>
    </x-main>
    