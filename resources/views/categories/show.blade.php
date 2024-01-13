<x-main>
    <div class="container my-4">
        <h1 class="a-category">{{$category->name}}</h1>
        <div class="row">

        {{-- @if($category->count() == 0)
        <h3>Non ci sono annunci disponibili</h3> --}}
        
     
            @foreach(App\Models\Announcement::all() as $announcement)
                @if($announcement->category->id == $category->id)
                <div class="col-sm-8 col-md-7 col-lg-5 col-xl-4 col-xxl-3 p-3">
                    <div class="card mb-4" style="width: 18rem;">
                    <img src="https://picsum.photos/300/220" class="card-img-top" alt="...">

                        <div class="card-body">
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <div class="d-flex justify-content-between">
                            <p class="card-title "><a class="a-category text-black" href="{{route('categories.show', $announcement->category)}}">{{$announcement->category->name}}</a></p>
                            <p class="card-text"><em class="text-small">{{$announcement->user->name}}</em></p>
                        </div>
                        
                        <p class="card-text">{{$announcement->description}}</p>
                        
                        <p class="card-text text-end"><em>€ {{number_format($announcement->price, 2)}}</em></p>
                        <div class="text-center">
                            <a href="{{route('show.announcement', $announcement)}}" class="btn btn-primary">Visualizza annuncio</a>
                        </div>
                        </div>
                    </div>
                </div>
                @endif
            
            @endforeach
        
        
            
        
            
            {{-- <header class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h2 class="fw-bolder  mb-2">Vendi presto ciò che vuoi</h2>
                                <p class="lead  mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum nobis dolor neque, aspernatur commodi tempore.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-outline-primary btn-lg px-4 me-sm-3" href="{{route('announcements')}}">Crea annuncio</a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-4 col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://images.pexels.com/photos/3082341/pexels-photo-3082341.jpeg" alt="..." /></div>
                    </div>
                </div>
            </header> --}}
        

        {{-- @endif --}}
        </div>
    </div>
</x-main>
