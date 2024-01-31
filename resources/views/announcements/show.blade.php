<x-main title="{{$announcement->title}}">

  <div class="container box-product">
  
    <!-- Dettaglio prodotto -->
    <h1 class="my-5">{{$announcement->title}}
    </h1>
  
    <!-- Inizio row dettaglio prodotto -->
    <div class="row">
  
      <div class="col-md-4" >
        {{-- @if (!$announcement->images->isEmpty()) --}}
        {{-- immagine principale --}}
        {{-- @foreach($announcement->images as $image) --}}
        <img class="img" src="https://fakeimg.pl/300x300?text=Prova&font=bebas" alt="" id="productImg" onclick()>
        {{-- @endforeach --}}
  
        {{-- immagini piccole da selezionare --}}
        <div class= "img-select">
  
          <div class= "img-item">
              <img src = "https://fakeimg.pl/300x300?text=Prova&font=bebas" alt = "..." class="small-img" onclick()>
          </div>
  
          <div class="img-item">
              <img src="https://fakeimg.pl/300x300?text=Prova2&font=bebas" alt = "..." class="small-img" onclick()>
          </div>
  
          <div class="img-item">
              <img src = "https://fakeimg.pl/300x300?text=Prova&font=bebas" alt = "..." class="small-img" onclick()>
          </div>
  
          <div class="img-item">
              <img src="https://fakeimg.pl/300x300?text=Prova2&font=bebas" alt = "..." class="small-img" onclick()>
          </div>
  
        </div>
  
      </div>
      {{-- @endif --}}
  
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
  
            {{-- <button type="button" class="btn">{{__('ui.aggiungi_preferiti')}} <i class="fa-regular fa-heart"></i></button> --}}
            <button type="button" class="btn d-flex justify-content-center ps-3">{{__('ui.aggiungi_preferiti')}} <i class="btnlike"> <livewire:likes :announcement="$announcement"/> </i></button>
  
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