@extends('admin.app')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="text-left mb-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">
                <i class="fa fa-plus"></i> <b>Add User</b>
            </button>
            <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Add User</h4>
                            <small class="font-bold">Fill in the details below to add a new user.</small>
                        </div>
                        <form action="{{ route('admin.add-user') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <div class="text-left" for="name">Name</div>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" required>
                                </div>
                                <div class="mb-3">
                                    <div class="text-left" for="email">Email</div>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required>
                                </div>
                                <div class="mb-3">
                                    <div class="text-left" for="password">Password</div>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
                                </div>
                                <div class="mb-3">
                                    <div class="text-left" for="role">Role</div>
                                    <select id="role" name="role" class="form-control" required>
                                        <option value="">-- Select Role --</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="ibox-content">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr class="gradeX">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td style="color: green">
                                    <b>{{ ucwords($item->role) }}</b>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary dim" data-toggle="modal" data-target="#myModal5{{ $item->id }}">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <div class="modal inmodal fade" id="myModal5{{ $item->id }}" tabindex="-1" role="dialog"  aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title">Update User Information</h4>
                                                    <small class="font-bold">Fill in the details below to update user information.</small>
                                                </div>
                                                <form action="{{ route('admin.edit-user', $item->id) }}" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <div class="text-left" for="name">Name</div>
                                                            <input value="{{ $item->name }}" type="text" id="name" name="name" class="form-control" placeholder="Enter Name" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="text-left" for="email">Email</div>
                                                            <input value="{{ $item->email }}" type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="text-left" for="password">Change Password</div>
                                                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter New Password">
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="text-left" for="role">Role</div>
                                                            <select id="role" name="role" class="form-control">
                                                                <option value="">-- Select Role --</option>
                                                                <option value="admin" {{ $item->role === 'admin' ? 'selected' : '' }}>Admin</option>
                                                                <option value="user" {{ $item->role === 'user' ? 'selected' : '' }}>User</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                        <button onclick="updateData()" class="btn btn-primary">
                                                            <i class="fa fa-check"></i> Save
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @if($item->role === "user")
                                        <button onclick="confirmDelete('{{ $item->id }}')" type="button" class="btn btn-danger dim" type="button">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(userId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to delete this user?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let url = "{{ route('admin.delete', ['id' => ':id', 'table' => 'users']) }}";
                    url = url.replace(':id', userId);
                    window.location.href = url;
                }
            });
        }
    </script>
@endsection


