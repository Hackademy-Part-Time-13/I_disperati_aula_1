<x-main>

    <form action="/reset-password" method="POST">
     @csrf

      <div class="mb-3">
        <label  class="form-label">Email address</label>
        <input type="email" class="form-control"  value="{{old('email')}}" name="email" >
        @error('email')  {{$message}} @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control"  name="password">
        @error('password')  {{$message}} @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Password Confirmation</label>
        <input type="password" class="form-control" name="password_confirmation">
      </div>

      <input type="hidden" name="token" value="{{request()->route('token')}}">

      <button type="submit" class="btn btn-primary">Registrati</button>
      </form>

    </x-main>
