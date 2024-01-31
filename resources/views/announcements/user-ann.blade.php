<x-main title="My announcements">
    <div class="container my-4">

            <div class="main-body">


                  <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                      <div class="card-profiles">
                        <div class="card-body-s">
                          <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                              <h4>{{ Auth::user()->name }}</h4>
                              <p class="text-secondary mb-1">{{ Auth::user()->email }}</p>

                              <button class="btn btn-outline-primary">Message</button>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-8">
                      <div class="card-profile mb-3">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Nome & Cognome</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ Auth::user()->name }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ Auth::user()->email }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Mobile</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ Auth::user()->phone }}
                            </div>
                          </div>
                          <hr>
                          @auth
                          @if (Auth::user()->is_revisor)
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Revisore</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              Si
                            </div>
                          </div>
                          @endif
                          @endauth
                          <hr>
                          <div class="row">
                            <div class="col-sm-12">
                              <a class="btn btn-info " target="__blank" href="{{ route('user.edit') }}">Edit</a>
                            </div>
                          </div>
                        </div>
                      </div>





                    </div>
                </div>
                {{-- lista degli annunci creati--}}
                <div class="mt-5 mb-5">
                    <livewire:announcements.index/>
                </div>

            </div>
            {{-- Lista articoli preferiti dell'utente --}}


                <h2 class="pt-4">Annunci salvati</h2>
                <div class="row ">

                    @foreach (App\Models\Like::where('user_id',auth()->user()->id)->get() as $like)
                    <div class=" col-sm-8 col-md-7 col-lg-5 col-xl-4 col-xxl-3 p-3 ">
                        <div class="card" style="width: 18rem;">
                            <div>
                                <img style="max-height:210px; object-fit:cover" src="{{!$like->announcement->images()->get()->isEmpty() ?  $like->announcement->images()->first()->getUrl(300,300) : 'https://picsum.photos/300/220' }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">{{$like->announcement->title}}</h5>

                            <p class="card-title "><a class="a-category text-black" href="{{route('categories.show', $like->announcement->category)}}">{{$like->announcement->category->name}}</a></p>

                            <p class="card-text">{{Illuminate\Support\Str::limit($like->announcement->description, 90)}}</p>
                            <div class="d-flex justify-content-between">
                                <p class="card-text"><em class="text-small">{{$like->announcement->user->name}}</em></p>
                                <p class="card-text">{{\Carbon\Carbon::parse($like->announcement->created_at)->format('d/m/Y')}}</p>
                            </div>
                            <p class="card-text text-end fw-semibold"><em>€ {{number_format($like->announcement->price, 2)}}</em></p>
                            @guest
                            <div class="text-center">
                                <a href="{{route('show.announcement', $like->announcement)}}" class="btn fs-6" style="background-color: #F3B61F">Visualizza annuncio</a>

                            </div>
                            @endguest
                            @auth
                            <div class="text-center d-flex justify-content-between align-items-center">

                                <a href="{{route('show.announcement', $like->announcement)}}" class="btn fs-6" style="background-color: #F3B61F">Visualizza annuncio</a>
                                {{-- Like --}}
                                <livewire:likes :announcement="$like->announcement"/>

                            </div>
                            @endauth
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>

</x-main>
