<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('appointments.create');
    }

    public function store(Request $request)
    {
        // Validate and store the appointment data
        // You can access the form data using $request->input()

        // Example code to create a new appointment
        $appointment = new Appointment;
        $appointment->consultant_id = $request->input('consultant_id');
        $appointment->appointment_date = $request->input('appointment_date');
        $appointment->appointment_time = $request->input('appointment_time');
        $appointment->client_name = $request->input('client_name');
        $appointment->save();

        // Redirect to the appointments index page or show a success message
        return redirect()->route('appointments.index')->with('success', 'Appointment booked successfully!');
    }

    public function index()
    {
        $appointments = Appointment::all();
        return view('appointments.index', compact('appointments'));
    }
}
