@extends('admin.app')
@section('content')
    <div class="wrapper wrapper-content">
        @include('admin.component.session-alert')
        <div class="ibox-content">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Hospital Number</th>
                            <th>Name</th>
                            <th>Form Number</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $key->hospitalID }}</td>
                                <td>{{ $key->name['firstname'] }} {{ $key->name['lastname'] }}</td>
                                <td>Form {{ ucwords(Request::segment(index: 4)) }}</td>
                                <td>
                                    <a href="{{ route($route, [ 'id' => $key->id ]) }}" target="_blank" class="text-white" rel="noopener noreferrer">
                                        <button type="button" class="btn btn-primary dim">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
