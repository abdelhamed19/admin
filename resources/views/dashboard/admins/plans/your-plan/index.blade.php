<x-dashboard-layout title="Your Plan">
    @section('content')
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Your Plan</h1>
            <x-dashboard-flash-message />
            <!-- DataTales Example -->
            <div class="card shadow mb-8">
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-md-6">
                                    @livewire('search', ['model' => 'App\Models\Plan', 'field' => 'name', 'route' => 'show.plan'])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                    <tr>
                                        <td>{{ $plan->id }}</td>
                                        <td><a href="">{{ $plan->plan->name }}</a></td>
                                        <td>{{ $plan->plan->price }}</td>
                                        <td>{{ $plan->plan->status }}</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-dashboard-layout>
