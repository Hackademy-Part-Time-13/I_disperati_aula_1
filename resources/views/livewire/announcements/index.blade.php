<div class="">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    {{-- tabella annunci accettati --}}
    <div class="my-5">
        <h2>Annunci accettati</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($acceptedAnnouncements as $announcement)
                    <tr>
                        <td style="background-color: #e3f2fd;">{{ $announcement->title }}</td>
                        <td style="background-color: #e3f2fd;"><a
                                href="{{ route('categories.show', $announcement->category) }}"
                                class="text-black a-category"><em>{{ $announcement->category->name }}</em></a></td>
                        <td style="background-color: #e3f2fd;">
                            {{ Illuminate\Support\Str::limit($announcement->description, 30) }}</td>
                        <td style="background-color: #e3f2fd;">€ {{ number_format($announcement->price, 2) }}</td>
                        <td style="background-color: #e3f2fd;">
                            <div class="d-flex gap-2">
                                <button type="submit" wire:click="destroy({{ $announcement }})"
                                    class="btn btn-outline-danger">Delete</button>
                            </div>
                        </td>
                        <div class="text-start">
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $acceptedAnnouncements->links() }}
    </div>

    <hr>

    {{-- tabella annunci rifiutati --}}
    <div class="my-5">
        <h2>Annunci rifiutati</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rejectedAnnouncements as $announcement)
                    <tr>
                        <td>{{ $announcement->title }}</td>
                        <td><a href="{{ route('categories.show', $announcement->category) }}"
                                class="text-black a-category"><em>{{ $announcement->category->name }}</em></a></td>
                        <td>{{ Illuminate\Support\Str::limit($announcement->description, 30) }}</td>
                        <td>€ {{ number_format($announcement->price, 2) }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <button type="submit" wire:click="destroy({{ $announcement }})"
                                    class="btn btn-outline-danger">Delete</button>
                            </div>
                        </td>
                        <div class="text-start">
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $rejectedAnnouncements->links() }}
    </div>

    <hr>

    {{-- tabella annunci in revisione --}}
    <div class="my-5">
        <h2>Annunci in stato di revisione</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendingAnnouncements as $announcement)
                    <tr>
                        <td style="background-color: #e3f2fd;">{{ $announcement->title }}</td>
                        <td style="background-color: #e3f2fd;"><a
                                href="{{ route('categories.show', $announcement->category) }}"
                                class="text-black a-category"><em>{{ $announcement->category->name }}</em></a></td>
                        <td style="background-color: #e3f2fd;">
                            {{ Illuminate\Support\Str::limit($announcement->description, 30) }}</td>
                        <td style="background-color: #e3f2fd;">€ {{ number_format($announcement->price, 2) }}</td>
                        <td style="background-color: #e3f2fd;">
                            <div class="d-flex gap-2">
                                <button type="submit" wire:click="destroy({{ $announcement }})"
                                    class="btn btn-outline-danger">Delete</button>
                            </div>
                        </td>
                        <div class="text-start">
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pendingAnnouncements->links() }}
    </div>
</div>
