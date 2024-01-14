<x-main title="{{$announcement->title}}">
  
  
  <style>
    div.gallery {
      margin: 6px;
      border: 8px solid #e3f2fd;
      float: left;
      width: 108px;
      
    }
    
    div.gallery:hover {
      border: 0px solid #777;
      
    }
    
    div.gallery img {
      width: 100%;
      height: auto;
      
    }
    
    div.desc {
      padding: 15px;
      text-align: center;
    }
  </style>
  
  
  
  
  
  <div class="container my-4">
    {{-- <h1>{{$announcement->title}}</h1> --}}
    <div class="row">
      <div class="col-6">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://picsum.photos/300/300" class="d-block" width="600" height="400"  alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/300/300" class="d-block" width="600" height="400"  alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/300/300" class="d-block" width="600" height="400"  alt="...">
            </div>
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
        
        
        
        
        <div class="gallery text-center">
          <img src="https://picsum.photos/50/50" alt="Cinque Terre" width="10" height="10">
        </div>
        
        <div class="gallery text-center">
          <img src="https://picsum.photos/300/300" alt="Forest" width="10" height="10">
        </div>
        
        <div class="gallery text-center">
          <img src="https://picsum.photos/300/300" alt="Forest" width="10" height="10">
        </div>
        
        <div class="gallery text-center">
          <img src="https://picsum.photos/300/300" alt="Mountains" width="10" height="10">
        </div>
        <div class="gallery text-center">
          <img src="https://picsum.photos/300/300" alt="Mountains" width="10" height="10">
        </div>
      </div>
      
      
      
      
      
      
      <div class="col-6">
        <div class="card-body text-center">
          <h5 class="card-title fs-1 fw-bold">{{$announcement->title}}</h5>
          <p class="card-title fs-3 "><a class="a-category text-black" href="">{{$announcement->category->name}}</a></p>
          <p class="card-text fs-5">{{$announcement->description}}</p>
          <p class="card-text text-end"><em>€ {{number_format($announcement->price, 2)}}</em></p>
          <p class="card-text text-end">{{\Carbon\Carbon::parse($announcement->created_at)->format('d/m/Y')}}</p>
          <p class="card-text text-end">{{$announcement->user->name}}</p>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
</x-main>
