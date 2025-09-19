@extends('admin.app')
@section('content')
    <div class="wrapper wrapper-content">
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
                                    <button onclick="window.location.href='{{ route("result", [ 'id' => $item->id ]) }}'" class="btn btn-info dim" type="button"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-primary dim" type="button"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger dim type="button">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
