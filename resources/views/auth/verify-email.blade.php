<x-main title="Verify-Mail">

    <div class="container verify-box">
        <h1>Conferma la tua email prima di continuare:</h1>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                Email di verifica inviata!
            </div>
        @endif

        <form method="POST" action="/email/verification-notification">
            @csrf
            <button class="btn btn-outline-primary" type="submit">Invia mail di conferma</button>
        </form>
    </div>

</x-main>
