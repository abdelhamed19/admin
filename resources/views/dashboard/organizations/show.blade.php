<x-dashboard-layout title="Organization" >
    @section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Organization</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Organization</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Admin </th>
                                <th>branches</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $organization->name }}</td>
                                <td>{{ $organization->admin->name  }}</td>
                                <td>
                                    @forelse ($organization->branches as $branch)
                                    {{ $branch->name }}
                                    <br>
                                    @empty
                                    No braches
                                    @endforelse
                                </td>

                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    @endsection
    </x-dashboard-layout>
