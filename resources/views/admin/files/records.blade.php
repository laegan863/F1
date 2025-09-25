@extends('admin.app')
@section('content')
    <div class="wrapper wrapper-content">
        @include('admin.component.session-alert')
        <div class="ibox-content">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Hospital Number</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr class="gradeX">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->hospitalID }}</td>
                                <td>{{ $item->name['firstname'] }} {{ $item->name['lastname'] }}</td>
                                <td>{{ $item->mobile_number }}</td>
                                <td>{{ $item->email_address }}</td>
                                <td class="text-center">
                                    <a href="{{ route('view.forms', ['id' => $item->id ] ) }}" class="text-white" rel="noopener noreferrer">
                                        <button type="button" class="btn btn-primary dim" type="button">
                                            <i class="fa fa-eye"></i> View Forms
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
