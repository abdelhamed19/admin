<x-dashboard-layout title="All Cooperations">
    @section('content')
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">All Cooperations</h1>
            <x-dashboard-flash-message />
            <!-- DataTales Example -->
            <div class="card shadow mb-8">
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{route('create.cooperation')}}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Add Cooperation</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <livewire:search model="\App\Models\Cooperate" field="name" route='show.cooperation'/>
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
                                    <th>Name</th>
                                    <th>status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cooperations as $cooperation)
                                    <tr>
                                        <td><a href="{{route('show.cooperation',$cooperation->id)}}">___{{$cooperation->id}}___</a></td>
                                        <td>{{ $cooperation->admin->email }}</td>
                                        <td>{{ $cooperation->name }}</td>

                                        <td>
                                            {{ $cooperation->status }}
                                        </td>
                                        <td>
                                            <div class="btn-circle btn-lg">
                                                <form action="{{route('delete.cooperation',$cooperation->id)}}" method="POST" onsubmit="return confirmDelete()">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-circle">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('edit.cooperation',$cooperation->id)}}" class="btn btn-info btn-circle">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No Cooperations found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <x-dashboard-pagination :paginator="$cooperations" />
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-dashboard-layout>
