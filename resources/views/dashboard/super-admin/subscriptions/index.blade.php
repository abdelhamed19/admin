<x-dashboard-layout title="All Subscriptions">
    @section('content')
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">All Subscriptions</h1>
            <x-dashboard-flash-message />
            <!-- DataTales Example -->
            <div class="card shadow mb-8">
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{route('create.subscription')}}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Add Subscription</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <livewire:search model="\App\Models\Subscription" field="number" route='show.subscription'/>
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
                                    <th>#</th>
                                    <th>Admin</th>
                                    <th>Plan</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($subscriptions as $subscription)
                                    <tr>
                                        <td><a href="{{route('show.subscription',$subscription->number)}}">{{$subscription->number}}</a></td>
                                        <td>{{ $subscription->admin->email }}</td>
                                        <td>
                                             {{ $subscription->plan->name }}
                                        </td>
                                        <td>
                                            {{ $subscription->start_date }}
                                        </td>
                                        <td>
                                            {{ $subscription->end_date }}
                                        </td>
                                        <td>
                                            {{ $subscription->status }}
                                        </td>
                                        <td>
                                            <div class="btn-circle btn-lg">
                                                <form action="{{route('delete.subscription',$subscription->id)}}" method="POST" onsubmit="return confirmDelete()">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-circle">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('edit.subscription',$subscription->id)}}" class="btn btn-info btn-circle">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8">No subscriptions found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <x-dashboard-pagination :paginator="$subscriptions" />
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-dashboard-layout>
