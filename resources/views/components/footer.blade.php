<footer class="text-center text-lg-start text-muted" style="background-color: #e3f2fd;">
    <section class="">
      <div class="container-fluid text-xl-start mt-3 pt-3 text-center">
        {{-- colonna sx --}}
        <div class="row justify-content-around">
          <div class=" col-md-4 col-lg-3 col-xl-3  mb-md-0 mb-2 ">
            <h5 class="text-uppercase fw-bold mb-3 text-start text-center text-md-start">
                 Presto.it
            </h5>
            <p style="text-align: justify">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit praesentium voluptatibus officia repellendus molestiae sequi libero tenetur deserunt.
            </p>
          </div>

          {{-- Colonna centrale --}}
          @auth
          @if (!Auth::user()->is_revisor)
          <div class="col-md-4 col-lg-3 col-xl-3  mb-md-0 mb-2 text-center">
            <h6 class="text-uppercase fw-bold mb-3">{{__('ui.lavora_con_noi')}}</h6>
            <a class="btn" style="background-color: #F3B61F" href="{{route('become.revisor')}}">{{__('ui.diventa_revisore')}}</a>
            <p>
          </div>
          @endif
          @endauth

          {{-- Colonna dv --}}
          <div class="col-md-4 col-lg-3 col-xl-3  mb-md-0 mb-2 text-center text-md-end">
            <h6 class="text-uppercase fw-bold mb-3">{{__('ui.contatti')}}</h6>
            <p><i class="fas fa-home me-3"></i>Città, 01234 XX, Italy</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@presto.it
            </p>
            <p><i class="fas fa-phone me-3"></i>+39 123 45 6789</p>
          </div>
        </div>
      </div>
    </section>

    {{-- parte sotto --}}
    <div class="text-center" style="background-color: rgba(19, 101, 255, 0.05);">
            <div class="py-2  d-md-flex justify-content-center align-items-center gap-5">
                {{-- Icone social network --}}
                <div class="">
                  {{-- Facebook --}}
                  <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button">
                      <i class="fab fa-facebook-f"></i>
                  </a>
                  {{-- Twitter --}}
                  <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button">
                      <i class="fab fa-twitter"></i>
                  </a>
                  {{-- <Google --}}
                  <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button">
                      <i class="fab fa-google"></i>
                  </a>
                  {{-- Instagram --}}
                  <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button">
                      <i class="fab fa-instagram"></i>
                  </a>
                  {{-- Linkedin --}}
                  <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button">
                      <i class="fab fa-linkedin-in"></i>
                  </a>
                  {{-- GitHub --}}
                  <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button">
                      <i class="fab fa-github"></i>
                  </a>
                </div>
                {{-- Copyright --}}
                <div class="">
                    © 2024 Copyright:
                    <a class="text-reset fw-bold" href="/">Presto.it</a>
                </div>
            </div>
    </div>
  </footer>
