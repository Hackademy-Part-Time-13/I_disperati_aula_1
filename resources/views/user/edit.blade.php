<x-main title="Modifica user">
<div class="container">
    <div class="row">
        <div class="col-12 mt-4">
            <h1>Modifica dati</h1>

            <form action="{{ route('user.update') }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                  <label  class="form-label">Full name</label>
                  <input name="name" type="text" class="form-control"   value="{{old('name')}}">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Phone</label>
                    <input  name="phone" type="text" class="form-control"   value="{{old('phone')}}">
                  </div>
                <button type="submit" class="btn btn-primary">Modifica</button>
              </form>

        </div>
    </div>
</div>

</x-main>
