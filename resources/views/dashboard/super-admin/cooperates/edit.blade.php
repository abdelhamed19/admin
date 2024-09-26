<x-dashboard-layout title="Edit Cooperation">
    @section('content')
        <div class="container full-page-form">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Cooperation</h4>
                    <x-error-message />
                    <form action="{{ route('update.cooperation',$coop->id) }}" method="POST" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <x-dashboard-form-input name="name" value="{{$coop->name}}" label="Name"
                            placeholder="Name" />
                        <x-dashboard-form-input name="email" type="email" value="{{$coop->admin->email}}" label="email"
                            placeholder="email" />
                        <select name="status" class="form-control" id="exampleInputUsername1">
                            <option value="{{$coop->status}}" selected>{{$coop->status}}</option>
                            <option value="active">active</option>
                            <option value="disabled">disabled</option>
                        </select>
                        <br>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a href="{{route('all.admins')}}" type="button" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    @endsection
</x-dashboard-layout>
