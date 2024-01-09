<x-main title="Register">
    <div class="row">
        <div class="col-12"></div>

<form action="/register" method="POST">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Username</label>
    <input required type="text" name="name" value="{{old('name')}}"  class="form-control" id="exampleInputPassword1">
    @error('name')
    {{$message}}
    @enderror
  </div>
  <div class="mb-3">
    <label  class="form-label">Phone</label>
    <input required type="text" name="phone" value="{{old('phone')}}"  class="form-control" id="exampleInputPassword1">
    @error('phone')
    {{$message}}
    @enderror
  </div>
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input required type="email" name="email" value="{{old('email')}} "class="form-control" >
    @error('email')
    {{$message}}
    @enderror
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
    @error('password')
    {{$message}}
    @enderror
  </div>
  <div class="mb-3">
    <label  class="form-label">Password Confirmation</label>
    <input required type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Registrati</button>
</form>
</div>
</x-main>
