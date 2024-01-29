<x-main title="dashboard revisore ">
  
  <div class="container my-4">
    {{-- prima sezione --}}
    <h1 class="display-6 text-center"> {{$announcement_to_check ? 'Ecco gli annunci da revisionare' : 'Non ci sono annunci da revisionare per questo utente'}}</h1>
    {{-- <h1>{{$announcement->title}}</h1> --}}
    
    
    {{-- @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
    @endif --}}
    
    {{-- @if(session()->has('error'))
    <div class="alert alert-success" role="alert">
      {{session('error')}}
    </div>
    @endif --}}
    
    @if($announcement_to_check)
    
    {{-- seconda sezione --}}
    <div class="row">
      <div class="col-6">
        
        {{-- carosello --}}
        @if (!$announcement_to_check->images->isEmpty())
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
        @else
        <div class="my-5">
          <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://picsum.photos/500/300" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://picsum.photos/500/301" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://picsum.photos/500/299" class="d-block w-100" alt="...">
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
      
      <div class="col-6">
        <div class="row p-2">
          <div class="col-12 col-md-6">
          <img src="{{$image->getUrl(300,300)}}" class="img-fluid p-3 rounded" alt="...">
          </div>
          <div class="col-md-3 border-end">
          <h5 class="tc-accent mt-3">Tags</h5>
          <div class="p-2">
          
          @if ($image->labels)
          @foreach ($image->labels as $label)
          <p class="d-inline">{{$label}},</p>
          @endforeach
          @endif
          </div>
          </div>
          
          <div class="col-md-3">
          <div class="card-body">
          <h5 class="tc-accent">Revisione Immagini</h5>
          <p>Adulti: <span class="{{$image->adult}}"></span></p>
          <p>Satira: <span class="{{$image->spoof}}"></span></p>
          <p>Medicina: <span class="{{$image->medical}}"></span></p>
          <p>Violenza: <span class="{{$image->violence}}"></span></p>
          <p>Contenuto ammiccante: <span class="{{$image->racy}}"></span></p>
          </div>
          </div>
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

