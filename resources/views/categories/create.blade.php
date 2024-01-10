<x-main>

    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <div class="mb-3">
        <label  class="form-label">Nome Della Categoria</label>
        <input type="text" class="form-control" name="name">
       <div class="text-danger"> @error('name') {{ $message }} @enderror</div>
      </div>
        <div><button type="submit"class="btn btn-outline-dark">Crea Categoria</button></div>
    </form>

</x-main>