@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <!-- Welcome Message -->
            <div class="col-12 mb-4">
                <div class="card shadow-sm border-0 rounded-lg">
                    <div class="card-body text-center">
                        <h2 class="text-primary fw-bold">Welcome, Super Admin!</h2>
                        <p class="text-muted">Manage users, permissions, and system settings from here.</p>
                    </div>
                </div>
            </div>

            <!-- Dashboard Stats -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-lg bg-info text-white">
                    <div class="card-body text-center">
                        <h5>Total Users</h5>
                        <h3>#</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-lg bg-success text-white">
                    <div class="card-body text-center">
                        <h5>Active Admins</h5>
                        <h3>#</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-lg bg-warning text-dark">
                    <div class="card-body text-center">
                        <h5>System Logs</h5>
                        <h3>#</h3>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="col-12 mt-4">
                <div class="card shadow-sm border-0 rounded-lg">
                    <div class="card-body">
                        <h4 class="fw-bold text-primary">Quick Actions</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{ route('users.index') }}" class="btn btn-primary w-100">Manage Users</a>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="btn btn-secondary w-100">System Settings</a>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="btn btn-danger w-100">View Logs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
