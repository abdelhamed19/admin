<x-dashboard-layout title="All Employees">
    @section('content')
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">All Employees</h1>
            <x-dashboard-flash-message />
            <!-- DataTales Example -->
            <div class="card shadow mb-8">
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{route('create.employee')}}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Add Employee</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <livewire:search model="\App\Models\User" field="name" route='show.employee'/>
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
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>Branch Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td><a href="{{route('show.employee',$user->id)}}">{{$user->id}}</a></td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->branche->name }}</td>
                                        <td>
                                            <div class="btn-circle btn-lg">
                                                <form action="{{route('delete.employee',$user->id)}}" method="POST" onsubmit="return confirmDelete()">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-circle">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('edit.employee',$user->id)}}" class="btn btn-info btn-circle">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8">No users found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <x-dashboard-pagination :paginator="$users" />
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-dashboard-layout>
