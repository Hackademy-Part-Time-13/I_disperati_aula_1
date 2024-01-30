<x-main>
  
    <div class="container mt-5">
      
      <h2 class="mt-5 mb-5">Crea una categoria</h2>
      
      <div class="row">
        <div class="col-md-12">
          <div class="card p-5">
  
    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <div class="mb-3">
        <label  class="form-label">Nome Della Categoria</label>
        <input type="text" class="form-control" name="name">
       <div class="text-danger"> @error('name') {{ $message }} @enderror</div>
      </div>
      <div class="mt-3 actions">
        <button type="button" class="btn btn-outline-info btn-circle fw-semibold">Crea</button>
      </div>
    </form>

</div>
        
</div>
</div>
</div>


</x-main>