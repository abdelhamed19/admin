{{-- <div class="form-group">
    <input type="text" wire:model.live.debounce.200ms="search" id="searchInput"
           class="form-control" placeholder="Search Admin">

    @if($results)
        <select wire:model="selectedAdmin" class="form-control mt-3">
            <option value="">Select Admin</option>
            @foreach ($results as $result)
                <option value="{{ $result->id }}">{{ $result->email }}</option>
            @endforeach
        </select>
    @else
        <p>No results found.</p>
    @endif
</div> --}}
{{-- <div>
    <select wire:model.live="search" wire:key="{{ $email }}" class="form-control mt-3">
        @foreach (App\Models\Admin::where('email','like','%'.$search.'%')->get() as $admin)
            <option value="{{ $admin->id }}">{{ $admin->email }}</option>
        @endforeach
    </select>
</div> --}}


