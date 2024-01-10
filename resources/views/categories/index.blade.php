<x-main>
    @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
         {{session('success')}}
        </div>
      @endif
      <table class="table">
          <thead class="bg-dark">
            <tr>
              <th scope="col" class="bg-dark text-white">#Id</th>
              <th scope="col" class="bg-dark text-white">Name</th>
              <th scope="col" class="bg-dark text-white">Azioni</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($categories as $category)
                <tr>
              <th scope="row" class="">{{$category->id}}</th>
              <td class="">{{$category->name}}</td>
              <td class="">
                  <a href="{{route('categories.show',$category)}}" class="btn btn-info">Show</a>
                  <a href="{{route('categories.edit',$category)}}" class="btn btn-primary">Edit</a>
                  <form action="{{route('categories.destroy', $category)}}" method="POST">
                  @method('DELETE')
                    @csrf
                  <button type="submit" class="btn btn-danger m-1">Delete</button>
                  </form>
              </td>
            </tr>
              @endforeach
  
  
          </tbody>
        </table>
  </x-main>