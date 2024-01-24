<form action="{{route('set_language_locale', $lang)}}" method="GET">
    @csrf
    <button type="submit" class="btn" style="background-color:transparent; border:none;">
    <span class="fi fi-{{$nation}} fis"></span>
    </button>
</form>




