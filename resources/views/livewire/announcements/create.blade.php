<div class="mt-3">

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

  <form wire:submit.prevent="store">
      @csrf
      <div class="mb-3">
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
      @enderror
      {{-- <div class="col-4 d-none">
          <label class="form-label">Autore</label>
          <input wire:model.blur="author" type="text" class="form-control" value="{{auth()->user()->id}}">                
      </div> --}}
        <br>
        <button type="submit" class="btn btn-outline-primary">Crea annuncio</button>

  </form>
</div>
