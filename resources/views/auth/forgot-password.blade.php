<x-main>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form action="/forgot-password " method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
            <div class="text-danger">
                @error ('email')  {{$message}} @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Reset Password</button>
    </form>
    </x-main>
