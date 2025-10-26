<div>
    @forelse($polls as $poll)
        <div class="mb-4">
            <h3 class="text-xl mb-2">
                {{$poll->title}}
            </h3>
            @foreach($poll->options as $option)
                <div>
                    <button class="btn" wire:click="vote({{$option->id}})">Vote</button>
                    {{$option->name}} ({{$option->votes->count()}})
                </div>
            @endforeach
        </div>

    @empty
        <div class="text-gray-500">No polls available.</div>
    @endforelse
</div>
