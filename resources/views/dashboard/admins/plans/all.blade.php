<x-dashboard-layout title="All Plans">
    @section('content')
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">All Plans</h1>
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
                                    <th>Period</th>
                                    <th># of subscription</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($plans as $plan)
                                    <tr>
                                        <td>{{ $plan->id }}</td>
                                        <td><a href="">{{ $plan->name }}</a></td>
                                        <td>{{ $plan->price }}</td>
                                        <td>{{ $plan->period }}</td>
                                        <td>{{ $plan->subscriptions_count }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No plans found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <x-dashboard-pagination :paginator="$plans" />
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-dashboard-layout>
