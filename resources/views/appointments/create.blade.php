<!-- resources/views/appointments/create.blade.php -->
<script src="{{ asset('js/appointment.js') }}"></script>

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Book an Appointment</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('appointments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="consultant_id">Consultant:</label>
                <input type="text" name="consultant_id" id="consultant_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="appointment_date">Date:</label>
                <input type="date" name="appointment_date" id="appointment_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="appointment_time">Time:</label>
                <input type="time" name="appointment_time" id="appointment_time" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="client_name">Client Name:</label>
                <input type="text" name="client_name" id="client_name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Book Appointment</button>
        </form>
    </div>
@endsection
