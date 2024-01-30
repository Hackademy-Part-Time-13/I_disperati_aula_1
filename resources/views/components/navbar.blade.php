<nav class="navbar navbar-expand-lg px-4 py-3" style="background-color: #e3f2fd;">
  <div class="container-fluid">
      <img style="width: 25px" src="{{ asset('storage/image-logo/02.png') }}" alt="">
      <a class="navbar-brand" style="color:#F3B61F " href="{{ route('home') }}">resto.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('home') }}">{{__('ui.home')}}</a>
          </li>



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__('ui.categorie')}}
            </a>
            <ul class="dropdown-menu">
              @foreach(App\Models\Category::all() as $category)
                <li><a class="dropdown-item a-category" href="{{route('categories.show', $category)}}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('all.announcements')}}">{{__('ui.annunci')}}</a>
          </li>

          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('announcements')}}">{{__('ui.crea_il_tuo_annuncio')}}</a>
          </li>
          @endauth

        </ul>




                {{-- barra ricerca annunci --}}

                {{-- <form action="{{route('announcements.search')}}" method="GET" class="d-flex">
                  <input name="searched" class="form-control me-2" type="search"  aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Cerca</button>
                  </form> --}}

                  {{-- fine barra di ricerca --}}


        @guest
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__('ui.area_personale')}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">{{__('ui.accedi')}}</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">{{__('ui.registrati')}}</a></li>
            </ul>
          </li>
        </ul>
        @endguest
        @auth
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__('ui.ciao')}} {{Auth::user()->name}}
                @if (Auth::user()->is_revisor)
                @if(App\Models\Announcement::toBeRevisionedCount())
                {{-- @dd(App\Models\Announcement::all()->id) --}}
                {{-- @if(App\Models\Announcement::all() != Auth::user()->id) --}}
                <span class="badge rounded-pill bg-danger">{{ App\Models\Announcement::toBeRevisionedCount() }}
                  <span class="visually-hidden">Unread messages
                 </span>
                  </span>
                  @endif
                  {{-- @endif --}}
                  @endif
            </a>

                <ul class="dropdown-menu dropdown-menu-end">
                  {{-- creare vista UTENTE con anche la lista degli annunci creatiE ACCETTATI --}}
                  <li>
                      <a class="dropdown-item" href="{{route('user.announcements')}}">Profilo</a>
                  </li>
                    <li>
                        <a class="dropdown-item" href="{{route('user.announcements')}}">{{__('ui.i_miei_annunci')}}</a>
                    </li>
                    {{--------------------------- AGGIUNGERE ROTTA E VISTA --------------------------------}}

                    @if (Auth::user()->is_revisor)
                     <li>
                        <a class="dropdown-item position-relative" href="{{ route('revisor.index') }}">{{__('ui.area_revisore')}}
                          @if(App\Models\Announcement::toBeRevisionedCount())
                        <span class="badge rounded-pill bg-danger">{{ App\Models\Announcement::toBeRevisionedCount() }}
                        <span class="visually-hidden">Unread messages
                       </span>
                        </span>
                        @endif
                        </a>

                    </li>
                    @endif


                    {{-- ------------------------------------------------------------------------------- --}}
                    <li><a class="dropdown-item" href="{{route('logout')}}"class="nav-link text-primary" onclick="event.preventDefault();getElementById('form-logout').submit();">{{__('ui.esci')}}</a>
                        <form action="/logout" method="POST" class="d_none" id="form-logout">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
          </ul>
        @endauth

        <div class="dropdown">
          <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-earth-americas" style="background-color:#e3f2fd;"></i>
          </a>

          <ul class="dropdown-menu text-center menus forme">
            <li class="nav-item formen">
              <x-_locale lang='it' nation='it'/>
            </li>
            <li class="nav-item formen">
              <x-_locale lang='en' nation='gb'/>
            </li>
            <li class="nav-item formen">
              <x-_locale lang='es' nation='es'/>
            </li>
          </ul>

        </div>


    </div>
</div>
</nav>
