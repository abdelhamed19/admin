<x-dashboard-layout title="All Admins">
    @section('content')
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">All Admins</h1>
            <x-dashboard-flash-message />
            <!-- DataTales Example -->
            <div class="card shadow mb-8">
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('create') }}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Add Admin</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <livewire:search model="\App\Models\Admin" field="email" route='edit'/>
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
                                    <th>Email</th>
                                    <th>Leaded Organizations</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($admins as $admin)
                                    <tr>
                                        <td>{{ $admin->id }}</td>
                                        <td>{{ $admin->name }}</td>
                                        <td>
                                             {{ $admin->email }}
                                        </td>
                                        <td>
                                            {{ $admin->organization->name ?? 'No organization yet' }}
                                        </td>
                                        <td>{{ $admin->status }}</td>
                                        <td>
                                            <div class="btn-circle btn-lg">
                                                <form action="{{ route('delete.admins', $admin->id) }}" method="POST" onsubmit="return confirmDelete()">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-circle">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('edit', $admin->id) }}" class="btn btn-info btn-circle">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No Admins found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <x-dashboard-pagination :paginator="$admins" />
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-dashboard-layout>
