@props(['comments', 'class'])
<div>
    @foreach($comments as $comment)
    <div class="{{ $class }}">
        <div class="flex">
            <h2 class="text-xl font-black">{{ $comment->nickname }}</h2>
            <p class="text-sm ml-2 mt-1">{{ $comment->created_at->format('H:i d-m-Y')}}</p>
        </div>
        <p class="py-2 text-sm">{{ $comment->content }}</p>
    </div>
    @endforeach
</div>
