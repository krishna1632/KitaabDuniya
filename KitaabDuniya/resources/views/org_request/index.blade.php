@extends('layouts.admin')

@section('content')
    <h1>Organisation Requests</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Licence</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($organisationRequests as $request)
                @php
                    $userExists = \App\Models\User::where('email', $request->email)->exists();
                @endphp
                <tr>
                    <td>{{ $request->name }}</td>
                    <td>{{ $request->email }}</td>
                    <td>{{ $request->phone }}</td>
                    <td>{{ $request->address }}</td>
                    <td>{{ ucfirst($request->gender) }}</td>
                    <td>
                        @if ($request->org_licence)
                            <a href="{{ asset('storage/' . $request->org_licence) }}" target="_blank">View Licence</a>
                        @else
                            No Licence Uploaded
                        @endif
                    </td>
                    <td>
                        <!-- Add User Button -->
                        <a href="{{ route('org_request.addUser', $request->id) }}" 
                           class="btn btn-primary add-user-btn {{ $userExists ? 'disabled-btn' : '' }}"
                           {{ $userExists ? 'disabled' : '' }}>
                            Add User
                        </a>
                        <a href="#" class="btn btn-danger">Send Mail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    <style>
        .disabled-btn {
            cursor: not-allowed !important;  /* 🚫 Yeh cursor apply karega */
            opacity: 0.6;
        }
    </style>
@endsection
