<x-main title="dashboard revisore ">





    <div class="container my-4">
            <h1 class="display-2 text-center"> {{$announcement_to_check ? 'Ecco gli annunci da revisionare' : 'Non ci sono annunci da revisionare'}}</h1>
          {{-- <h1>{{$announcement->title}}</h1> --}}


          @if(session()->has('success'))
       <div class="alert alert-success" role="alert">
        {{session('success')}}
        </div>
         @endif

          @if(session()->has('error'))
       <div class="alert alert-success" role="alert">
        {{session('error')}}
        </div>
         @endif

         @if($announcement_to_check)


         <div class="row">
             <div class="col-6">


              {{-- codice carosello --}}
              <section>
                <div class="container-carousel">
                  <div class="carousel-01">
                    <input type="radio" name="slides" checked="checked" id="slide-1">
                    <input type="radio" name="slides" id="slide-2">
                    <input type="radio" name="slides" id="slide-3">
                    <input type="radio" name="slides" id="slide-4">
                    <input type="radio" name="slides" id="slide-5">
                    <input type="radio" name="slides" id="slide-6">
                    <ul class="carousel__slides">
                      <li class="carousel__slide">
                        <figure>
                          <div>
                            <img src="https://picsum.photos/id/1041/800/450" alt="">
                          </div>

                        </figure>
                      </li>
                      <li class="carousel__slide">
                        <figure>
                          <div>
                            <img src="https://picsum.photos/id/1043/800/450" alt="">
                          </div>

                        </figure>
                      </li>
                      <li class="carousel__slide">
                        <figure>
                          <div>
                            <img src="https://picsum.photos/id/1044/800/450" alt="">
                          </div>

                        </figure>
                      </li>
                      <li class="carousel__slide">
                        <figure>
                          <div>
                            <img src="https://picsum.photos/id/1045/800/450" alt="">
                          </div>
                        </figure>
                      </li>
                      <li class="carousel__slide">
                        <figure>
                          <div>
                            <img src="https://picsum.photos/id/1049/800/450" alt="">
                          </div>

                        </figure>
                      </li>
                      <li class="carousel__slide">
                        <figure>
                          <div>
                            <img src="https://picsum.photos/id/1052/800/450" alt="">
                          </div>

                        </figure>
                      </li>
                    </ul>
                    <ul class="carousel__thumbnails">
                      <li>
                        <label for="slide-1"><img src="https://picsum.photos/id/1041/150/150" alt=""></label>
                      </li>
                      <li>
                        <label for="slide-2"><img src="https://picsum.photos/id/1043/150/150" alt=""></label>
                      </li>
                      <li>
                        <label for="slide-3"><img src="https://picsum.photos/id/1044/150/150" alt=""></label>
                      </li>
                      <li>
                        <label for="slide-4"><img src="https://picsum.photos/id/1045/150/150" alt=""></label>
                      </li>
                      <li>
                        <label for="slide-5"><img src="https://picsum.photos/id/1049/150/150" alt=""></label>
                      </li>
                      <li>
                        <label for="slide-6"><img src="https://picsum.photos/id/1052/150/150" alt=""></label>
                      </li>
                    </ul>
                  </div>
                </div>
              </section>
            </div>



            <div class="col-6 my-5">
              <div class="card-body">
                <h5 class="card-title fw-bold mt-5 mb-5 display-4 text-center text-uppercase">{{ $announcement_to_check->title }}</h5>
                <p class="card-text fs-5 my-4 " style="text-align: justify">{{  $announcement_to_check->description}}</p>

                <div class="d-flex justify-content-between">
                  <p class="card-text text-start fw-bold fs-3"><em>€ {{number_format($announcement_to_check->price, 2)}}</em></p>
                </div>

                <p class="card-text text-end mt-5">
                    Created at
                    {{\Carbon\Carbon::parse($announcement_to_check->created_at)->format('d/m/Y')}}
                    <br> by
                    <span class="fw-bold">
                    <em>
                    {{$announcement_to_check->user->name}}
                    </em>
                    </span>
                </p>


                {{-- <p class="card-text text-end">{{$announcement->user->name}}</p> --}}
              </div>
            </div>
          </div>
        </div>

       <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.accept_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form>
                </div>

                <div class="col-12 col-md-6 text-end">
                <form action="{{route('revisor.reject_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                </form>
                </div>
        </div>
       </div>
       @endif



</x-main>

