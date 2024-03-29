<x-main title="Login">

    <div class="container d-flex justify-content-center align-items-center mt-5 mb-5">

        <div class="row border rounded-5 p-3 bg-white shadow box-area-login">
            
            {{-- Box a sinistra --}}
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #0D3B66;">
                <div class="featured-image mb-3">
                    <img src="https://static.vecteezy.com/system/resources/previews/014/432/655/non_2x/mobile-payments-with-smartphone-and-credit-debit-card-illustration-free-png.png" class="img-fluid" style="width: 300px;">
                    <p class="text-white fs-2 mt-3" style="font-weight: 700;">{{__('ui.unisciti_a_noi')}}</p>
                    <p class="text-white text-wrap text-center">{{__('ui.esperienza')}}</p>
                </div>
            </div>
            
            {{-- Box a destra --}}
            <div class="col-md-6 right-box">
                <div class="row align-items-center ms-2">
                    <div class="header-text mb-4">
                        <h2>{{__('ui.eccoti')}}</h2>
                        <p>{{__('ui.siamo_felici')}}</p>
                    </div>
                    
                    {{-- Inizio form Login --}}
                    <form action="/login" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label  class="form-label mb-0">Email</label>
                            <input type="email" name="email" value="{{old('email')}} "class="form-control @error('email') is-invalid @enderror" >
                            @error('email')
                            {{$message}}
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label mb-0 ms-2">Password</label>
                            <div class="input-group">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                            <span class="input-group-text eye-psw-button"><i class="fa-regular fa-eye-slash mx-auto" id="tooglepsw-button" role="button"></i></span>
                            </div> 
                            @error('password')
                            {{$message}}
                            @enderror
                        </div>
                        
                        <div class="input-group mb-5 d-flex justify-content-between">
                            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>{{__('ui.ricordami')}}</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="/forgot-password">{{__('ui.password_dimenticata')}}</a></small>
                            </div>
                            
                        </div>
                        
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg w-100 fs-6 text-white" style="background-color: #0D3B66;">{{__('ui.accedi')}}</button>
                        </div>
                        
                        {{-- accesso con google e github --}}
                        <div class="d-grid gap-2  col-12 mx-auto mt-4 mb-3">
                            {{-- Login con Google --}}
                            <a href="/auth/google" class="btn btn-lg btn-light w-100 fs-6">
                                {{__('ui.accedi_con')}} Google <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                                </svg>
                            </a>
                            {{-- Login con GitHub --}}
                            <a href="/auth/github" class="btn btn-lg btn-light w-100 fs-6">
                                {{__('ui.accedi_con')}} GitHub <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                </svg>
                            </a>
                        </div>
                        
                        {{-- Richiamo al register --}}
                        <div class="row">
                            <small>{{__('ui.no_account')}}<a href="/register">{{__('ui.registrati')}}.</a></small>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</x-main>
