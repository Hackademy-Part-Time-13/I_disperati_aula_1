<x-main>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                    {{session('message')}}
                    </div>
                @endif
                <h1 class="text-center py-5">Benvenuto in Presto.it</h1>
            </div>
        </div>
    </div>
    <header class="py-5 text-white" style="background-color: #0D3B66">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h2 class="fw-bolder display-6 mb-4">Vendi presto ciò che vuoi</h2>
                        <p class="lead fs-5 mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum nobis dolor neque, aspernatur commodi tempore.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-lg px-4 me-sm-3 fw-semibold fs-5" href="{{route('announcements')}}" style="background-color: #F3B61F">Crea annuncio</a>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://images.pexels.com/photos/3082341/pexels-photo-3082341.jpeg" alt="..." /></div>
            </div>
        </div>
    </header>


        {{-- silvia mi dice di mettere un commento --}}

        {{-- aggiungo il commento serio, bisogna sistemare la rotta delle categorie --}}


        <div class="d-flex justify-content-around">
            <div class="col-sm-4 col-md-6 col-lg-8 col-xl-10 col-xxl-12  mb-5 mt-5 p-5 text-center" >
                <!-- xl circle buttons-->
                <a href="/categories/1"><button class="btn btn-success btn-circle btn-circle-xl"><i class="fa-solid fa-book"></i></button></a>
                    <a href="/categories/2"><button class="btn btn-primary btn-circle btn-circle-xl"><i class="fa-solid fa-music"></i></button></a>
                    <a href="/categories/3"><button class="btn btn-info btn-circle btn-circle-xl"><i class="fa-solid fa-puzzle-piece"></i></button></a>
                    <a href="/categories/4"><button class="btn btn-warning btn-circle btn-circle-xl"><i class="fa-solid fa-computer"></i></button></a>
                    <a href="/categories/5"><button class="btn btn-danger btn-circle btn-circle-xl"><i class="fa-solid fa-couch"></i></button></a>
                    <a href="/categories/6"><button class="btn btn-dark btn-circle btn-circle-xl"><i class="fa-brands fa-pagelines"></i></button></a>
                    <a href="/categories/7"><button class="btn btn-secondary btn-circle btn-circle-xl"><i class="fa-solid fa-vial"></i></button></a>
                    <a href="/categories/8"><button class="btn btn-light btn-circle btn-circle-xl"><i class="fa-solid fa-shirt"></i></button></a>
                    <a href="/categories/9"><button class="btn btn-light btn-circle btn-circle-xl"><i class="fa-solid fa-car"></i></button></a>
                    <a href="/categories/10"><button class="btn btn-light btn-circle btn-circle-xl"><i class="fa-solid fa-mug-saucer"></i></button></a>
                </div>
            </div>

            <div class="py-5 text-white" style="background-color: #0D3B66">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-start">
                            <div class=" col-lg-4 col-xl-5 col-xxl-6 d-none d-xl-block text-start">
                            <img class="img-fluid rounded-3 my-5" src="https://www.verdefacile.eu/img/cms/azienda-servizi/collabora-con-noi.jpg" alt="..." /></div>

                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-end text-xl-end">
                                <h2 class="fw-bolder display-6 mb-4">Collabora con noi</h2>
                                <p class="lead fs-5 mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum nobis dolor neque, aspernatur commodi tempore.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-end">
                                    <a class="btn btn-lg px-4 me-sm-3 fw-semibold fs-5" href="{{route('lavoraConNoi')}}" style="background-color: #F3B61F">Diventa revisore</a>
                                </div>
                            </div>
                        </div> </div>
                </div>
            </div>














</x-main>


