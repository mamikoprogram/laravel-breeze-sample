{{-- <div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div> --}}

@props(['thread' => $thread])

<a href="{{ route('threads.show', $thread) }}" class="p-4 block grid bg-white sm:rounded-lg boder-1 shadow-sm">
    <span>
        {{ $thread->title }}
    </span>
    <span>
        {{ $thread->created_at->diffForHumans() }}
    </span>
</a>
