@extends('admin.app')
@section('content')
    @php
        $cfg = \App\Http\Controllers\FollowUpFormController::followUpForms()[$route];
        $patient = \App\Models\Demographicprofile::where('hospitalID', request()->route('hospitalID'))->where('status', 1)->first();
    @endphp
    <div class="wrapper wrapper-content">
        @include('admin.component.session-alert')

        <div class="mb-3 d-flex justify-content-between align-items-center flex-wrap" style="gap:8px">
            @if($patient)
                <a href="{{ route('view.forms', ['id' => $patient->id]) }}" class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i> Back to patient record</a>
                <a href="{{ route($cfg['pages'][1]['route'], ['hospitalID' => $patient->hospitalID, 'new' => 1]) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus"></i> New {{ $cfg['label'] }} entry
                </a>
            @endif
        </div>

        <div class="ibox">
            <div class="ibox-title">
                <h5>{{ $cfg['label'] }} &middot; {{ $cfg['title'] }} entries
                    @if($patient) <small class="text-muted ml-2">{{ $patient->name['firstname'] ?? '' }} {{ $patient->name['lastname'] ?? '' }} ({{ $patient->hospitalID }})</small>@endif
                </h5>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Hospital No.</th>
                                <th>Name</th>
                                <th>Saved</th>
                                <th class="text-center" style="min-width:150px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $entry)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td data-order="{{ $entry->date }}">{{ $entry->date ? \Carbon\Carbon::parse($entry->date)->format('M d, Y') : '—' }}</td>
                                    <td style="font-family:monospace">{{ $entry->hospitalID }}</td>
                                    <td>{{ $entry->name['firstname'] ?? '' }} {{ $entry->name['lastname'] ?? '' }}</td>
                                    <td>{{ optional($entry->updated_at)->format('M d, Y g:i A') }}</td>
                                    <td class="text-center" style="white-space:nowrap">
                                        <a href="{{ route($route, ['id' => $entry->id]) }}" target="_blank" rel="noopener" class="btn btn-primary btn-xs" title="View / print">
                                            <i class="fa fa-print"></i> View
                                        </a>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown" title="Edit">
                                                <i class="fa fa-pencil"></i> Edit
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <h6 class="dropdown-header">Edit page</h6>
                                                @foreach($cfg['pages'] as $n => $page)
                                                    <a class="dropdown-item" href="{{ route('followup.edit', ['form' => $route, 'id' => $entry->id, 'page' => $n]) }}">
                                                        {{ $n }}. {{ $page['label'] }}
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                        @if(Auth::user()->role === 'admin')
                                            <button type="button" class="btn btn-danger btn-xs" title="Delete entry"
                                                    onclick="confirmEntryDelete({{ $entry->id }})">
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
    </div>

    @if(Auth::user()->role === 'admin')
        <form id="deleteEntryForm" method="POST" class="d-none">
            @csrf
            @method('DELETE')
        </form>
        <script>
            function confirmEntryDelete(id) {
                Swal.fire({
                    title: 'Delete this entry?',
                    text: 'All pages of this {{ $cfg['label'] }} entry will be permanently deleted.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ed5565',
                    confirmButtonText: 'Yes, delete it'
                }).then((r) => {
                    if (r.isConfirmed) {
                        const f = document.getElementById('deleteEntryForm');
                        f.action = "{{ route('followup.destroy', ['form' => $route, 'id' => '__ID__']) }}".replace('__ID__', id);
                        f.submit();
                    }
                });
            }
        </script>
    @endif
@endsection
