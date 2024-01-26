<x-main title="Lavora con noi">
    {{-- immagine --}}
    <div class="m-0 d-flex justify-content-end align-items-center" style="background-image: url(https://images.pexels.com/photos/3082341/pexels-photo-3082341.jpeg); background-position:center; background-size:cover; height:350px;">
        <div style="background-color: #e3f2fd; padding: 25px 100px 25px 0; opacity: 0.8;">
            <div class="text-start px-4 text-black">
                <h1 class="fw-bold">LAVORA CON NOI</h1>
                <h4>Compila il form per diventare un revisore</h4>
            </div>
        </div>
    </div>
    {{-- fine immagine --}}

    {{--  main  --}}
    {{-- @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div> --}}
   
    {{-- @elseif ($errors->any())
        @foreach ($errors->all() as $error) 
        <div class="ms-auto me-auto text-center col-6 my-2 alert alert-danger">
            <li>{{$error}}</li>
        </div>
        @endforeach             --}}

    {{-- @elseif (session('error'))
    <div class="ms-auto me-auto text-center col-6 my-2 alert alert-danger">
        {{ session('error') }}
    </div>
    @endif --}}

    <div class="container my-5">
        <div class="row">
            {{-- parte sx: contatti --}}
            <div class="col-md-5 col-lg-5 col-xl-5 mt-4 mx-auto p-5" style="background-color: #e3f2fd; border-radius:2%">
                <div class="d-flex justify-contente-start align-items-center mb-4">
                    <h4 class="text-uppercase fw-bold">guadagna con presto.it</h4>
                </div>
                <div>
                    <p class="mb-3 fs-5">Unisciti al nostro team</p>
                    <p class="mb-5 fs-5">Clicca ora su Diventa un revisore</p>
                    
                </div>
               
               
            </div>

            {{-- parte dx: FORM --}}
            <div class="col-md-6 col-lg-7 col-xl-7 mt-4 mx-auto text-white p-5" style="background-color: #0D3B66; border-radius:2%">
                <h4 class="text-uppercase fw-bold">Diventa un revisore</h4>
                {{-- form contatti --}}
                <form method="POST" action="{{route('lavora.save')}}">
                    @csrf
                    <ul>
                        @auth
                        <li>{{auth()->user()->name}}</li>
                        <li>{{auth()->user()->email}}</li>
                        @endauth
                        
                    </ul>
                    @guest
                    <p>Accedi per diventare revisore</p>
                    @endguest
                    
                    @auth
                    <button type="submit" class="btn mt-4 fw-semibold fs-5" style="background-color: #F3B61F">Diventa un revisore</button>
                    @endauth

                    @guest
                    <a href="{{route('login')}}" class="btn mt-4 fw-semibold fs-6" style="background-color: #F3B61F">Accedi</a>
                    @endguest
                  </form>
            </div>
        </div>

    </div>

        {{-- Vecchio form --}}

                {{-- <div class="mb-3">
                      <label class="form-label">Nome</label>
                      <input type="text" required name="name" @error('name') is-invalid @enderror placeholder="Nome Cognome" class="form-control" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Telefono</label>
                      <input type="text" required  name="phone" @error('phone') is-invalid @enderror placeholder="+39 123 456 789" class="form-control" value="{{old('phone')}}">
                    </div> --}}
                    {{-- <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" required  name="email" @error('email') is-invalid @enderror placeholder="email@example.it" class="form-control" value="{{old('email')}}">
                    </div> --}}
                    {{-- <div class="col-4 d-none">
                        <label class="form-label">Utente</label>
                        <input name="user" type="text" class="form-control" value="{{auth()->user()->id}}">                
                    </div> --}}

    
</x-main>