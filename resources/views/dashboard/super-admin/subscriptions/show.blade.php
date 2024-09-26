<x-dashboard-layout title="Subscription">
    @section('content')
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Subscription</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Subscription Defination</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Start At </th>
                                    <th>End At</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $subscription->number }}</td>
                                    <td>{{ $subscription->start_date }}</td>
                                    <td>{{ $subscription->end_date }}</td>
                                    <td>{{ $subscription->status }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Plan Defination</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Plan Name</th>
                                    <th>Price </th>
                                    <th>Period</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $subscription->plan->name }}</td>
                                    <td>{{ $subscription->plan->price }}</td>
                                    <td>{{ $subscription->plan->period }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Admin Defination</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Admin Name</th>
                                    <th>Admin Email </th>
                                    <th>organization</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $subscription->admin->name }}</td>
                                    <td>{{ $subscription->admin->email }}</td>
                                    <td>{{ $subscription->admin->organization->name ?? 'No organization yet' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    @endsection
</x-dashboard-layout>
