<x-dashboard-layout title="Create Employee">
    @section('content')
        <div class="container full-page-form">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Employee</h4>
                    <form action="{{ route('store.employee') }}" method="POST" class="forms-sample">
                        @csrf
                        <x-dashboard-form-input name="name" value="{{ old('name') }}" label="Name"
                            placeholder="Name" />
                        <x-dashboard-form-input name="email" type="email" value="{{ old('email') }}" label="email"
                            placeholder="email" />
                        <x-dashboard-form-input name="password" type="password" label="password" placeholder="password" />
                        <select name="status" class="form-control" id="exampleInputUsername1">
                            <option value="" selected>status</option>
                            <option value="active">active</option>
                            <option value="disabled">disabled</option>
                        </select>
                        <br>
                        <select name="branche_id" class="form-control" id="exampleInputUsername1">
                            <option value="" selected>Select Branche</option>
                            @foreach ($branches as $branche)
                                <option value="{{ $branche->id }}">{{ $branche->name }}</option>
                            @endforeach
                        </select>
                        <br>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="{{url()->previous()}}" type="button" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    @endsection
</x-dashboard-layout>
