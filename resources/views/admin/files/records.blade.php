@extends('admin.app')
@section('content')
    <div class="wrapper wrapper-content">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-info"></i> {{ Session::get('success') }}
            </div>
        @endif
        <div class="ibox-content">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Civil Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr class="gradeX">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name['firstname'] }} {{ $item->name['lastname'] }}</td>
                                <td>{{ $item->date_of_birth }}</td>
                                <td>{{ $item->civil_status }}</td>
                                <td class="text-center">
                                    <button onclick="window.location.href='{{ route("result", [ 'id' => $item->id ]) }}'" class="btn btn-info dim" type="button">
                                        <i class="fa fa-print"></i>
                                    </button>
                                    <a href="{{ route("view", [ 'id' => $item->id ]) }}" target="_blank" rel="noopener noreferrer">
                                        <button type="button" class="btn btn-primary dim" type="button">
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
