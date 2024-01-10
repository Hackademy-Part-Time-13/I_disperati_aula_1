<x-main>


    <form action="{{route('categories.update',$category)}}" method="POST">
        @method('PUT')
        @csrf 
        <div class="mb-3">
        <label  class="form-label">Nome Della Categoria</label>
        <input type="text" class="form-control" name="name" value="{{old('name',$category->name)}}">
        @error('name'){{$message}}@enderror
      </div>
        <div><button type="submit"class="btn">Modifica Categoria</button></div>
    </form>



</x-main>