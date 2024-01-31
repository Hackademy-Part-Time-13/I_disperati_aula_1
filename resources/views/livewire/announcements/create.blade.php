<div class="my-4">

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <form class="mb-5" wire:submit.prevent="store">
        <div class="row">
            @csrf

            {{-- colonna con l'inserimento dell'immagine, scelta categoria e select da implementare NUOVO/USATO --}}
            <div class="col-md-12">

                <div class="mb-4">
                    <label class="form-label text-uppercase fw-semibold">{{ __('ui.titolo') }}</label>
                    <input type="text" required placeholder="Inserisci un titolo..."
                        class="form-control @error('title') is-invalid @enderror" wire:model.blur="title">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>


                <div class="mb-4">
                    <label class="form-label text-uppercase fw-semibold">{{ __('ui.categoria') }}</label>
                    <select class="form-select @error('category_id') is-invalid @enderror" wire:model.blur="category_id"
                        required>
                        <p>
                            <option selected value="0">{{ __('ui.seleziona') }}</option>
                        </p>
                        @foreach (App\Models\Category::all() as $category)
                            <option class="text-black text-uppercase" value="{{ $category->id }}">{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        {{ $message }}
                    @enderror
                </div>
                {{-- select da implementare NUOVO/USATO --}}




                <div class="col-md-12">

                    <div class="mb-4">
                        <label class="form-label text-uppercase fw-semibold">{{ __('ui.descrizione') }}</label>
                        <textarea class="form-control  @error('description') is-invalid @enderror" required
                            placeholder="Inserisci una descrizione..." wire:model.blur="description" style="height: 200px"></textarea>
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-4">
                        <div>
                            <div class="form-group">
                                <label class="form-label text-uppercase fw-semibold">{{ __('ui.prezzo') }}</label>
                                <div class="input-group input-number input-number-currency">
                                    <span class="input-group-text fw-semibold">€</span>
                                    <input type="number" required
                                        class="form-control @error('price') is-invalid @enderror" data-bs-input
                                        step=".01" value="0" min="1" max="999999"
                                        wire:model.blur="price" />
                                </div>
                            </div>
                        </div>
                        @error('price')
                            {{ $message }}
                        @enderror
                    </div>
                    <label class="form-label text-uppercase fw-semibold">{{ __('ui.immagini_prodotto') }}</label>

                    

                    @if (!empty($images))
                        <div class="row">
                            <div class="col-12">
                                <p>{{ __('ui.anteprima') }}:</p>
                                <div class="row border  border-info rounded shadow py-4">
                                    @foreach ($images as $key => $image)
                                        <div class="col my-3">
                                            <div class="img-preview mx-auto shadow rounded"
                                                style="background-image: url({{ $image->temporaryUrl() }}); background-position:center; background-size:cover;">
                                            </div>
                                            <button type="button"
                                                class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                                wire:click="removeImage({{ $key }})">{{ __('ui.cancella') }}</button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                    @endif
                    <input class="form-control @error('temporary_images.*') is-invalid @enderror" name='image'
                        wire:model.blur="temporary_images" multiple type="file" id="formFile">
                </div>
                @error('temporary_images.*')
                    {{ $message }}
                @enderror
            </div>


        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn fw-semibold fs-6"
                style="background-color: #F3B61F">{{ __('ui.crea_annuncio') }}</button>
        </div>

    </form>
</div>
