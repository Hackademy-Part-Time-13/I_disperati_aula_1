<x-main title="{{ $category->name }}">
    <div class="container my-4">
        <h1 class="a-category">{{$category->name}}</h1>
        <div class="row ">

            {{-- @if($category->count() == 0)
                <h3>Non ci sono annunci disponibili</h3> --}}


                @foreach($announcements as $announcement)
                @if($announcement->category->id == $category->id)
                @if($announcement->is_accepted)
                <div class="  d-sm-flex justify-content-center col-sm-8 col-md-7 col-lg-5 col-xl-4 col-xxl-3">

                    <div class="card p-0 m-4" style="width: 18rem;">

                        <div>
                            <img style="max-height:210px; object-fit:cover" src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/300/220' }}" class="card-img-top" alt="...">
                        </div>

                        <div class="card-body ">
                            <h5 class="card-title">{{$announcement->title}}</h5>

                            <p class="card-title "><a class="a-category text-black" href="{{route('categories.show', $announcement->category)}}">{{$announcement->category->name}}</a></p>


                            <p class="card-text">{{Illuminate\Support\Str::limit($announcement->description, 90)}}</p>
                            <div class="d-flex justify-content-between">
                                <p class="card-text"><em class="text-small">{{$announcement->user->name}}</em></p>
                                <p class="card-text">{{\Carbon\Carbon::parse($announcement->created_at)->format('d/m/Y')}}</p>
                            </div>

                            <p class="card-text text-end fw-semibold"><em>€ {{number_format($announcement->price, 2)}}</em></p>
                                    @guest
                                    <div class="text-center">
                                        <a href="{{route('show.announcement', $announcement)}}" class="btn fs-6" style="background-color: #F3B61F">Visualizza annuncio</a>

                                    </div>
                                    @endguest
                                    @auth
                                    <div class="text-center d-flex justify-content-between align-items-center">

                                        <a href="{{route('show.announcement', $announcement)}}" class="btn fs-6" style="background-color: #F3B61F">Visualizza annuncio</a>
                                        {{-- Like --}}
                                        <livewire:likes :announcement="$announcement"/>

                                    </div>
                                    @endauth
                        </div>
                    </div>
                </div>
                @endif
                @endif

                @endforeach
                {{-- AGGIUSTARE PAGINATE --}}
                {{-- {{ $announcements->links() }}  --}}


            </div>

        </div>
    </x-main>
