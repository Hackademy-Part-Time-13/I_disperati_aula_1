<x-main>

    <div class="container my-4">
        <h1>Crea annuncio</h1>
    
        <div class="row">
            <div class="col-md-4 col-s-10">
                {{-- form per aggiunta degli annunci --}}
                <livewire:announcements.create/>
            </div>
            <div class="col-md-8 col-s-10">
                {{-- lista degli annunci --}}
                <livewire:announcements.index/>
            </div>
        </div>
    </div>
</x-main>