<div class="">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Prezzo</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($announcements as $announcement)
            <tr>
               
                <th scope="row">{{$announcement->id}}</th>
                <td>{{$announcement->title}}</td>
                <td><a href="{{route('categories.show', $announcement->category)}}" class="text-black a-category"><em>{{$announcement->category->name}}</em></a></td>
                <td>{{$announcement->description}}</td>
                <td>€ {{number_format($announcement->price, 2)}}</td>
                
            </tr> 
          @endforeach
        </tbody>
    </table>
    {{$announcements->links()}}
</div>
