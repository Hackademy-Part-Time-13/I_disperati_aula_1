<div>
    @if (App\Models\Like::where('announcement_id', $announcement->id)->where('user_id', auth()->user()->id)->exists())
    <span wire:click="deleteLike({{$announcement}})" class="d-flex align-items-center">
        <i   class="fa-solid fa-heart"></i>
        <p class="m-1">{{$announcement->likes->count()}}</p></span>
    @else
        <span wire:click="createLike({{$announcement}})" class="d-flex align-items-center" >
            <i  class="fa-regular fa-heart"></i>
            <p class="m-1">{{$announcement->likes->count()}}</p></span>
    @endif
</div>
