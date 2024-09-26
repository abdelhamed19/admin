<x-dashboard-layout title="Cooperation">
    @section('content')
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Cooperation</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Cooperation</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Admin </th>
                                    <th>status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $cooperation->name }}</td>
                                    <td>{{ $cooperation->admin->name }}</td>
                                    <td>
                                        {{ $cooperation->status }}
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
