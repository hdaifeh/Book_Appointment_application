<!-- resources/views/appointments/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>All Appointments</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Consultant ID</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Client Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->consultant_id }}</td>
                        <td>{{ $appointment->appointment_date }}</td>
                        <td>{{ $appointment->appointment_time }}</td>
                        <td>{{ $appointment->client_name }}</td>
                        <td>
                            <!-- Add buttons for edit and delete actions if required -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
