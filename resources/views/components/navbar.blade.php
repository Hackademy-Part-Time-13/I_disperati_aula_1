<nav class="navbar navbar-expand-lg px-4 py-3" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand d-flex" style="color:#F3B61F " href="{{ route('home') }}">
            <img style="width: 25px" src="{{ asset('storage/image-logo/02.png') }}" alt="">
            resto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- sezione a sx --}}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">{{ __('ui.home') }}</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('ui.categorie') }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach (App\Models\Category::all() as $category)
                            <li><a class="dropdown-item a-category"
                                    href="{{ route('categories.show', $category) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all.announcements') }}">{{ __('ui.annunci') }}</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('announcements') }}">{{ __('ui.crea_il_tuo_annuncio') }}</a>
                    </li>
                    {{-- se Admin: rotta per index e modifica CATEGORIE --}}
                    @if(auth()->user()->is_admin)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">Mod.categorie</a>
                    </li>
                    @endif
                    {{-- fine --}}
                @endauth
            </ul>

            {{-- sezione a dx --}}
            @guest
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ __('ui.area_personale') }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">{{ __('ui.accedi') }}</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('ui.registrati') }}</a></li>
                        </ul>
                    </li>
                </ul>
            @endguest
            @auth
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ __('ui.ciao') }} {{ Auth::user()->name }}
                            @if (Auth::user()->is_revisor)
                                @if (App\Models\Announcement::toBeRevisionedCount())
                                    <span
                                        class="badge rounded-pill bg-danger">{{ App\Models\Announcement::toBeRevisionedCount() }}
                                        <span class="visually-hidden">Unread messages
                                        </span>
                                    </span>
                                @endif
                            @endif
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('user.announcements') }}">Profilo</a>
                            </li>
                            {{-- vista se revisore --}}
                            @if (Auth::user()->is_revisor)
                                <li>
                                    <a class="dropdown-item position-relative"
                                        href="{{ route('revisor.index') }}">{{ __('ui.area_revisore') }}
                                        @if (App\Models\Announcement::toBeRevisionedCount())
                                            <span
                                                class="badge rounded-pill bg-danger">{{ App\Models\Announcement::toBeRevisionedCount() }}
                                                <span class="visually-hidden">Unread messages
                                                </span>
                                            </span>
                                        @endif
                                    </a>
                                </li>
                            @endif
                            {{-- fine vista se revisore --}}

                            <li><a class="dropdown-item" href="{{ route('logout') }}"class="nav-link text-primary"
                                    onclick="event.preventDefault();getElementById('form-logout').submit();">{{ __('ui.esci') }}</a>
                                <form action="/logout" method="POST" class="d_none" id="form-logout">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @endauth

            {{-- bandiere per multilingua --}}
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-earth-americas" style="background-color:#e3f2fd;"></i>
                </a>
                <ul class="dropdown-menu text-center menus forme">
                    <li class="nav-item formen">
                        <x-_locale lang='it' nation='it' />
                    </li>
                    <li class="nav-item formen">
                        <x-_locale lang='en' nation='gb' />
                    </li>
                    <li class="nav-item formen">
                        <x-_locale lang='es' nation='es' />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
