{{-- <x-main title="{{$announcement->title}}">
    
    <div class="container my-4">
        
        <div class="row">
            <div class="col-6">
                
                @if (!$announcement->images->isEmpty()) --}}
                {{-- carosello --}}
                {{-- <div class="my-5">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            @foreach ($announcement->images as $image)
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
                </div> --}}
                {{-- fine carosello --}}
                {{-- @else
                <div class="my-5">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://picsum.photos/300/300" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/300/301" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/300/299" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                
                @endif
            </div>
            
            
            
            <div class="col-6 my-5">
                <div class="card-body">
                    <h5 class="card-title fw-bold mt-3 mb-5 fs-2 text-center text-uppercase">{{$announcement->title}}</h5>
                    <p class="card-title fs-6 btn btn-primary " style="background-color:#e3f2fd; border:none"><a class="text-black a-category" href="{{route('categories.show', $announcement->category)}}">{{$announcement->category->name}}</a></p>
                    <p class="card-text fs-6 my-4">{{$announcement->description}}</p>
                    
                    
                    <div class="d-flex justify-content-between">
                        <p class="card-text text-start fw-bold fs-4"><em>€ {{number_format($announcement->price, 2)}}</em></p>
                        <div> --}}
                            {{-- da aggiungere componente livewire preferiti --}}
                            {{-- <button class="btn" style="background-color:#e3f2fd; border:none">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                </svg>
                                
                            </button>
                            <button type="button" class="btn" style="background-color:#e3f2fd; border:none"><i class="fa-solid fa-cart-shopping"></i> Aggiungi al carrello</button>
                        </div>
                        
                        
                    </div>
                    
                    <p class="card-text text-end mt-5">Annuncio creato: {{\Carbon\Carbon::parse($announcement->created_at)->format('d/m/Y')}} da <span class="fw-bold "><em>{{$announcement->user->name}}</em></span></p>
                    
                </div>
            </div>
        </div>
    </div>

</x-main> --}}

{{-- versione 2 --}}
<x-main>

    <div class="container box-product">
    
      <!-- Dettaglio prodotto -->
      <h1 class="my-5">{{$announcement->title}}
      </h1>
    
      <!-- Inizio row dettaglio prodotto -->
      <div class="row">
    
        <div class="col-md-4" >
          {{-- immagine principale --}}
          <img class="img" src="" alt="" id="productImg" onclick()>
    
          {{-- immagini piccole da selezionare --}}
          <div class= "img-select">
            @foreach ($announcement->images()->get() as $image)
            <div class= "img-item">
                <img src = "{{$image->getUrl(300,300)}}" alt = "..." class="small-img" onclick()>
            </div>
            @endforeach
          
    
          </div>
    
        </div>
    
        {{-- colonna destra --}}
        <div class="col-md-6 ms-2">
    
          <h3 class="my-3">{{$announcement->title}}</h3>
    
    
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
            <p class="card-text">{{__('ui.creazione')}} {{\Carbon\Carbon::parse($announcement->created_at)->format('d/m/Y')}} {{__('ui.da')}} <span class="fw-bold "><em>{{$announcement->user->name}}</em></span></p>
    
          
          </div>
    
          {{-- prezzo --}}
          <p class="card-text text-start fw-bold fs-4">€ {{number_format($announcement->price, 2)}}</p>
    
          <span class="badge rounded-pill mb-3" style="background-color: #0D3B66;"><a class="text-white a-category" href="{{route('categories.show', $announcement->category)}}">{{$announcement->category->name}}</a></span>
    
          {{-- descrizione del prodotto  --}}
          <p>{{$announcement->description}}</p>
          
          {{-- sezione acquisti --}}
          <div class="product-purchase">
    
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
              <label class="form-check-label" for="flexRadioDefault1">
                {{__('ui.nuovo')}}
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                {{__('ui.usato')}}
              </label>
            </div>
            
            <div class="purchase-info">
              <input type="number" min="0" value="1">
    
              <button type="button" class ="btn">
                {{__('ui.aggiungi_carrello')}} <i class="fa-solid fa-cart-shopping"></i>
              </button>
    
              <button type="button" class="btn d-flex">{{__('ui.aggiungi_preferiti')}} <i class="ps-2"> <livewire:likes :announcement="$announcement"/> </i></button>
             
    
            </div>
    
          </div>
          {{-- fine sezione acquisti --}}
    
        </div>
        {{-- fine colonna destra  --}}
    
        
    
      </div>
      {{-- fine row dettaglio prodotto --}}
    
    
      <!-- Prodotti correlati -->
      <div class="related-products">
        <h3 class="mb-5">{{__('ui.prodotti_correlati')}}</h3>
        
        <div class="row">
          
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="https://fakeimg.pl/300x300?font=bebas" alt="">
            </a>
          </div>
          
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="https://fakeimg.pl/300x300?font=bebas" alt="">
            </a>
          </div>
          
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="https://fakeimg.pl/300x300?font=bebas" alt="">
            </a>
          </div>
          
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="https://fakeimg.pl/300x300?font=bebas" alt="">
            </a>
          </div>
        </div>
    
      </div>
      <!-- fine row -->
    
    </div>
    <!-- fine container -->
    
</x-main>