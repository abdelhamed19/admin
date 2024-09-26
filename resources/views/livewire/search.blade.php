<div class="form-group">
    <input type="text" wire:model.live.debounce.200ms="search" id="searchInput"
     class="form-control" placeholder="Search">
     @if($search)
        <ul class="list-group mt-3">
            @forelse ($results as $result)
                <li class="list-group-item"><a href="{{route($route,$result->id)}}">{{ $result->$field }}</a></li>
            @empty
                <li class="list-group-item">No results found.</li>
            @endforelse
        </ul>
    @endif
</div>
