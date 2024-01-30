<x-main>

  <div class="container mt-2 mb-2">


    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
    @endif

    <h2 class="mt-1 mb-1">Categorie</h2>

    <div class="row">
      <div class="col-md-12">
        <div class="carde mt-3">
          <div class="table-responsive">
            <table class="table no-wrap mb-0">
              <thead>
                <tr>
                  <th scope="col" class="border-0 text-uppercase font-medium ps-4">#</th>
                  <th scope="col" class="border-0 text-uppercase font-medium">Category</th>
                  <th scope="col" class="border-0 text-uppercase font-medium">Actions</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($categories as $category)
                <td>
                  <h5 class="font-medium mb-0">{{$category->id}}</h5>
                </td>
                <td>
                  <span class="text-muted">{{$category->name}}</span><br>
                </td>
                <td class="d-flex justify-content-around actions">
                  <a href="{{route('categories.show',$category)}}" class="btn btn-outline-info btn-circle btn-lg btne-circle"><i class="fa-regular fa-eye"></i></a>
                  <a href="{{route('categories.edit',$category)}}" class="btn btn-outline-info btn-circle btn-lg btne-circle ml-2"><i class="fa-regular fa-pen-to-square"></i></a>
                  <form action="{{route('categories.destroy', $category)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-info btn-circle btn-lg btne-circle ml-2"><i class="fa-regular fa-trash-can"></i></button>
                  </form>
                </td>

              </tr>
              @endforeach







            </tbody>
          </table>
        </div>
      </div>
    </div>




  </div>
</div>

</x-main>
