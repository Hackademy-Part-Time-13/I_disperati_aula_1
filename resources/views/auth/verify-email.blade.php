<x-main title="Verify-Mail">

    <div class="container verify-box">

        <h1>Please, verify your email before continuing:</h1>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                A new email verification link has been emailed to you!
            </div>
        @endif


        <form method="POST" action="/email/verification-notification">
            @csrf
            <button class="btn btn-outline-dark" type="submit">send confirmation email</button>
        </form>

    </div>


</x-main>
