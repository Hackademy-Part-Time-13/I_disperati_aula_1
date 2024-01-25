<x-main title="dashboard revisore ">
  
  <div class="container my-4">
    {{-- prima sezione --}}
    <h1 class="display-6 text-center"> {{$announcement_to_check ? 'Ecco gli annunci da revisionare' : 'Non ci sono annunci da revisionare per questo utente'}}</h1>
    {{-- <h1>{{$announcement->title}}</h1> --}}
    
    
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
    @endif
    
    @if(session()->has('error'))
    <div class="alert alert-success" role="alert">
      {{session('error')}}
    </div>
    @endif
    
    @if($announcement_to_check)
    
    {{-- seconda sezione --}}
    <div class="row">
      <div class="col-6">
        
        {{-- carosello --}}
        @if ($announcement_to_check->images)
        <div class="my-5">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              {{-- @dd(count($announcement_to_check->images)) --}}
              @foreach($announcement_to_check->images as $image)
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" ></button>
              @endforeach
            </div>
            <div class="carousel-inner">
              @foreach ($announcement_to_check->images as $image)
              <div class="carousel-item @if($loop->first) active @endif">
                <img src="{{Storage::url($image->path)}}" class="d-block w-100" alt="...">
              </div>
              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        {{-- fine carosello --}}
        
        
        
        {{-- @if ($announcement_to_check->images)
          <section>
            <div class="container-carousel"> --}}
              
              
              {{-- <div class="carousel-item @if($loop->first)active @endif">
                <img src="{{Storage::url($image->path)}}" class="img-fluid p-3 rounded" alt="..">
              </div> --}}
              
              {{-- 
                <div class="carousel-01">
                  
                  <input type="radio" name="slides" checked="checked" id="slide-1"> --}}
                  {{-- <input type="radio" name="slides" id="slide-2">
                  <input type="radio" name="slides" id="slide-3">
                  <input type="radio" name="slides" id="slide-4">
                  <input type="radio" name="slides" id="slide-5">
                  <input type="radio" name="slides" id="slide-6"> --}}
                  {{-- <ul class="carousel__slides">
                    <li class="carousel__slide">
                      <figure>
                        <div>
                          <img src="{{Storage::url($announcement_to_check->image)}}" alt="">
                        </div>
                        
                      </figure>
                      @foreach ($announcement_to_check->images as $image) --}}
                      {{-- </li>
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
                        </li> --}}
                        {{-- </ul>
                          <ul class="carousel__thumbnails">
                            <li>
                              <label for="slide-1"><img src="{{Storage::url($image->path)}}" alt=""></label>
                            </li> --}}
                            {{-- <li>
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
                            </li> --}}
                            {{-- </ul>
                            </div>
                            @endforeach
                          </div>
                        </section> --}}
                        
                        {{-- @foreach ($announcement_to_check->images as $image)
                          <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{Storage::url($image->path)}}" class="img-fluid p-3 rounded" alt="..">
                          </div>
                          @endforeach --}}
                          
                          
                          @else
                          
                          {{-- codice carosello --}}
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
                        @endif
                        
                      </div>  
                        
                        <div class="col-6 my-5">
                          <div class="card-body">
                            <h5 class="card-title fw-bold mt-5 mb-5 fs-2 text-center text-uppercase">{{ $announcement_to_check->title }}</h5>
                            <p class="card-title fs-6 btn btn-primary mb-2" style="background-color:#e3f2fd; border:none"><a class="text-black a-category" href="{{route('categories.show', $announcement_to_check->category)}}">{{$announcement_to_check->category->name}}</a></p>
                            <p class="card-text fs-6 my-4 " style="text-align: justify">{{  $announcement_to_check->description}}</p>
                            
                            <div class="d-flex justify-content-between">
                              <p class="card-text text-start fw-bold fs-4"><em>€ {{number_format($announcement_to_check->price, 2)}}</em></p>
                            </div>
                            
                            <p class="card-text text-end mt-3">
                              Annuncio creato: {{\Carbon\Carbon::parse($announcement_to_check->created_at)->format('d/m/Y')}}
                              <br> da
                              <span class="fw-bold">
                                <em>
                                  {{$announcement_to_check->user->name}}
                                </em>
                              </span>
                            </p>
                            
                            
                            {{-- <p class="card-text text-end">{{$announcement->user->name}}</p> --}}
                          </div>
                        </div>
                      </div>
                      
                      {{-- terza sezione con i maledetti bottoni --}}
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <form action="{{route('revisor.accept_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success shadow">Accetta</button>
                          </form>
                        </div>
                        
                        <div class="col-12 col-md-6 text-end">
                          <form action="{{route('revisor.reject_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                          </form>
                        </div>
                      </div>
                      @endif
                    </div>
                    
                    
                    
                    
                    
                    
                  </x-main>
                  
                  