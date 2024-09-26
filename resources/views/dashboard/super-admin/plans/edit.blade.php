<x-dashboard-layout title="Edit Plan">
    @section('content')
        <div class="container full-page-form">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Plan</h4>
                    <form action="{{ route('update.plan',$plan->id) }}" method="POST" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <x-dashboard-form-input name="name" value="{{ $plan->name }}" label="Name"
                            placeholder="Name" />
                        <x-dashboard-form-input name="price" type="number" value="{{ $plan->price }}" label="price"
                            placeholder="price" />
                        <x-dashboard-form-input name="period" type="text" value="{{ $plan->period }}" label="period" placeholder="period" />

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
</x-dashboard-layout>
