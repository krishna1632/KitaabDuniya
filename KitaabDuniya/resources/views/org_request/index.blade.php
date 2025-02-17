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
                        <!-- You can add edit and delete actions here -->
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
