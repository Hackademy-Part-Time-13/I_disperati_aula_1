<div class="my-4">

  @if(session()->has('success'))
  <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
  @endif

  @if(session()->has('error'))
  <div class="alert alert-danger" role="alert">
      {{session('error')}}
    </div>
  @endif

  <form class="mb-5" wire:submit.prevent="store">
    <div class="row">
      @csrf

        {{-- colonna con l'inserimento dell'immagine, scelta categoria e select da implementare NUOVO/USATO --}}
        <div class="col-md-6">
          {{-- TODO: implementazione immagine con livewire US-05 --}}
          <div class="mb-4">
            <label  class="form-label text-uppercase fw-semibold">Immagini prodotto</label>
            <div class="mb-2">
              <img src="https://demos.creative-tim.com/paper-kit-2-pro/assets/img/image_placeholder.jpg" style="max-width: 500px; max-height: 250px;" alt="">
            </div>
            <input class="form-control @error('image') is-invalid @enderror" wire:model.blur="image" type="file" id="formFile">
          </div>
          @error('image')
            {{$message}}
          @enderror

          <div class="mb-4">
            <label  class="form-label text-uppercase fw-semibold">Categoria</label>
            <select class="form-select @error('category_id') is-invalid @enderror" wire:model.blur="category_id" required>
              <option selected>Seleziona una categoria</option>
              @foreach (App\Models\Category::all() as $category)
              <option class="text-black text-uppercase" value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
            @error('category_id')
            {{$message}}
            @enderror
          </div>
          {{-- select da implementare NUOVO/USATO --}}
        </div>


        {{-- colonna con titolo, prezzo e descrizione --}}
        <div class="col-md-6">
          <div class="mb-4">
            <label  class="form-label text-uppercase fw-semibold">Titolo</label>
            <input type="text" required placeholder="Inserisci un titolo..." class="form-control @error('title') is-invalid @enderror" wire:model.blur="title">
              @error('title')
                  {{$message}}
              @enderror
          </div>
          <div class="mb-4"> 
            <label  class="form-label text-uppercase fw-semibold">Descrizione</label>
              <textarea class="form-control  @error('description') is-invalid @enderror" required placeholder="Inserisci una descrizione..." wire:model.blur="description" style="height: 200px"></textarea>
              @error('description')
                  {{$message}}
              @enderror
          </div>
          <div class="mb-4">
            <div>
                <div class="form-group">
                  <label  class="form-label text-uppercase fw-semibold">Prezzo</label>
                  <div class="input-group input-number input-number-currency">
                    <span class="input-group-text fw-semibold">€</span>
                    <input type="number" required class="form-control @error('price') is-invalid @enderror" data-bs-input step=".01" value="0" min="1" max="999999" wire:model.blur="price"/>
                  </div>
                </div>
            </div>
              @error('price')
                  {{$message}}
              @enderror
          </div>
        </div>

        
      </div>
      <div class="text-center mt-4">
        <button type="submit" class="btn fw-semibold fs-6" style="background-color: #F3B61F">Crea annuncio</button>

      </div>


      {{-- form che usavamo prima --}}
      {{-- <div class="mb-3">
          <input type="text" required placeholder="Titolo" class="form-control @error('title') is-invalid @enderror" wire:model.blur="title">
          @error('title')
              {{$message}}
          @enderror
      </div>
      <div class="mb-3">
          <textarea class="form-control  @error('description') is-invalid @enderror" required placeholder="Inserisci una descrizione" wire:model.blur="description" style="height: 100px"></textarea>
          @error('description')
              {{$message}}
          @enderror
      </div>

      <div class="mb-3">
        <select class="form-select @error('category_id') is-invalid @enderror" wire:model.blur="category_id" required>
          <option selected>Seleziona categoria</option>
          @foreach (App\Models\Category::all() as $category)
          <option class="text-black" value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
        @error('category_id')
        {{$message}}
        @enderror
      </div>
        
      <div class="mb-3">
          <div>
              <div class="form-group">
                <div class="input-group input-number input-number-currency">
                  <span class="input-group-text fw-semibold">€</span>
                  <input type="number" required class="form-control @error('price') is-invalid @enderror" data-bs-input step=".01" value="0" min="1" max="999999" wire:model.blur="price"/>
                </div>
              </div>
          </div>
          @error('price')
              {{$message}}
          @enderror
      </div>


      <div class="mb-3">
          <input class="form-control @error('image') is-invalid @enderror" wire:model.blur="image" type="file" id="formFile">
      </div>
      @error('image')
         {{$message}}
      @enderror --}}
      {{-- <div class="col-4 d-none">
          <label class="form-label">Autore</label>
          <input wire:model.blur="author" type="text" class="form-control" value="{{auth()->user()->id}}">                
      </div> --}}
        {{-- <br>
        <button type="submit" class="btn btn-outline-primary">Crea annuncio</button> --}}

  </form>
</div>
