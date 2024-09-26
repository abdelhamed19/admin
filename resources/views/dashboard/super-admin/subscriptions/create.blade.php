<x-dashboard-layout title="Create Subscription">
    @section('content')
        <div class="container full-page-form">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Subscription</h4>
                    <x-error-message />
                    <form action="{{ route('store.subscription') }}" method="POST" class="forms-sample">
                        @csrf
                        {{-- <x-dashboard-form-input name="id" type="email" label="Admin Email"
                            placeholder="Admin Email" /> --}}

                             {{-- <livewire:search-admin /> --}}

                            <select name="id" class="form-control" id="adminSelect">
                                @forelse ($admins as $admin)
                                    <option value="{{ $admin->id }}">{{ $admin->email }}</option>
                                @empty
                                    <option value="">No admins available</option>
                                @endforelse
                            </select>
                            <br>

                            <select name="plan_id" class="form-control" id="exampleInputUsername1">
                                @forelse ($plans as $plan)
                                    <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                                @empty
                                    <option value="">No plans available</option>
                                @endforelse
                            </select>

                        <x-dashboard-form-input name="start_date" type="date" value="{{ old('start_date') }}" label="Start Date"
                        placeholder="Start Date" />

                        <x-dashboard-form-input name="end_date" type="date" value="{{ old('end_date') }}" label="End Date"
                        placeholder="End Date" />

                        <select name="status" class="form-control" id="exampleInputUsername1">
                            <option value="active" selected>active</option>
                            <option value="disabled">disabled</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="{{url()->previous()}}" type="button" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>


    @endsection
    <script>
        $(document).ready(function() {
            $('#adminSelect').select2({
                placeholder: 'Search for Admins',
                allowClear: true
            });
        });
    </script>
</x-dashboard-layout>
