<x-main>

    <div class="container my-4">
        <h1>Crea annuncio</h1>
    
        <div class="row">
            <div class="col-4">
                {{-- form per aggiunta degli annunci --}}
                <livewire:announcements.create/>
            </div>
            <div class="col-8">
                {{-- lista degli annunci --}}
                {{-- <livewire:announcements.index/> --}}
            </div>
        </div>
    </div>
</x-main>