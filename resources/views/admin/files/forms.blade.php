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
                        @foreach ($forms as $form => $value)
                            <tr class="gradeX text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->hospitalID ?? "N/A" }}</td>
                                <td>
                                    {{ ($value->name['firstname'] ?? 'N/A') . ' ' . ($value->name['lastname'] ?? '') }}
                                </td>

                                <td>Form {{ $loop->iteration }}</td>
                                <td class="text-center">
                                    @if(isset($value->status) && $value->status == 1)
                                        @if($loop->iteration == 1)
                                            <a href="{{ route('result.form'.$loop->iteration, ['id' => $value->id ]) }}" target="_blank" class="text-white" rel="noopener noreferrer">
                                                <button type="button" class="btn btn-primary dim" type="button">
                                                    <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('edit-demographic-profile', [ 'hospitalID' => $value->hospitalID ]) }}" class="text-white" rel="noopener noreferrer">
                                                <button type="button" class="btn btn-success dim">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                        @endif
                                        @if($loop->iteration != 1)
                                            <a href="{{ route('user.multiform', [ 'hospitalID' => $value->hospitalID, 'form' => $loop->iteration ]) }}" class="text-white">
                                                <button class="btn btn-warning dim">
                                                    <i class="fa fa-arrow-right"></i>
                                            </a>
                                            <a href="{{ route($form.'-firstpage', [ 'hospitalID' => $hospitalID ]) }}" class="text-white">
                                                <button type="button" class="btn btn-primary dim">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </a>
                                        @endif
                                    @else
                                        <a href="{{ route($form.'-firstpage', [ 'hospitalID' => $hospitalID ]) }}" class="text-white">
                                            <button type="button" class="btn btn-primary dim">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
