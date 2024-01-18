<x-main>
    <div class="container my-4 ">

        @if(Route::currentRouteName() == 'all.announcements')
        <h1 class="my-4">Annunci</h1>
        @elseif(Route::currentRouteName() == 'announcements.search')
        @if($announcements->count() > 0)

        <h1 class="my-4">Annunci trovati</h1>
        @else
        <h1 class="my-4">Non ci sono annunci in questa ricerca. Riprova.</h1>

        {{-- @elseif(!$announcements)
        <div class="col-12">
            <div class="alert alert-danger mt-3">
                <h1 class="my-4">Non ci sono annunci in questa ricerca. Riprova.</h1>
            </div>
        </div> --}}
        @endif
        @endif



        <div class="row">

            @forelse($announcements as $announcement)


            <div class=" col-sm-8 col-md-7 col-lg-5 col-xl-4 col-xxl-3 p-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/300/220" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <div class="d-flex justify-content-between">
                            <p class="card-title "><a class="a-category text-black" href="{{route('categories.show', $announcement->category)}}">{{$announcement->category->name}}</a></p>
                            <p class="card-text"><em class="text-small">{{$announcement->user->name}}</em></p>
                        </div>
                        <p class="card-text">{{Illuminate\Support\Str::limit($announcement->description, 100)}}</p>
                        <p class="card-text text-end"><em>€ {{number_format($announcement->price, 2)}}</em></p>
                        <div class="text-center">
                            <a href="{{route('show.announcement', $announcement)}}" class="btn btn-primary">Visualizza annuncio</a>
                        </div>
                    </div>
                </div>
            </div>

            @empty
            <div class="col-12">
                {{-- <h1 class="my-4">Non ci sono annunci in questa ricerca. Riprova.</h1> --}}
                <div class="alert alert-danger mt-3">
                    <p class="lead fs-4 text-black">Non ci sono annunci in questa ricerca. Riprova.</p>
                </div>
            </div>

            {{-- <div class="card-body">
                <h5 class="card-title">{{$announcement->title}}</h5>
                <p class="card-title "><a class="a-category text-black" href="">{{$announcement->category->name}}</a></p>
                <p class="card-text">{{$announcement->description}}</p>
                <p class="card-text text-end"><em>€ {{number_format($announcement->price, 2)}}</em></p>
                <div class="text-center">
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>--}}

            @endforelse
            {{ $announcements->links() }}
        </div>
    </div>
</x-main>
