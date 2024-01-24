<x-main>

    <div class="container my-4">
        <h1>{{__('ui.crea_il_tuo_annuncio')}}</h1>

        {{-- <div class="row">
            <div class="col-12"> --}}
                {{-- form per aggiunta degli annunci --}}
                <livewire:announcements.create/>
            </div>
            {{-- <div class="col-md-8 col-s-10"> --}}
                {{-- lista degli annunci --}}
                {{-- <livewire:announcements.index/>
            </div> --}}
        {{-- </div> --}}
    </div>
</x-main>
