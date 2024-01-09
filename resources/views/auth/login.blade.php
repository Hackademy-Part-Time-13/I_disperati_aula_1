<x-main title="Login">
    <div class="row">
        <div class="col-12"></div>

<form action="/login" method="POST">
    @csrf

  </div>
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" name="email" value="{{old('email')}} "class="form-control" >
    @error('email')
    {{$message}}
    @enderror
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    @error('password')
    {{$message}}
    @enderror
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" name="remember">
    <label class="form-check-label" for="exampleCheck1">Rimani connesso</label>
  </div>

  <a href="/forgot-password" class="btn btn-primary m-1">Password dimenticata</a>



  <button type="submit" class="btn btn-primary">Accedi</button>
</form>
</div>
</x-main>
