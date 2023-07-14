// JavaScript/jQuery code for creating an appointment using AJAX
$(document).ready(function() {
    // Add an event listener to the form submission
    $('#appointmentForm').on('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Get the form data
        var formData = $(this).serialize();

        // Make an AJAX POST request to create the appointment
        $.ajax({
            url: "{{ route('appointments.store') }}",
            method: "POST",
            data: formData,
            success: function(response) {
                // Handle success response
                console.log(response);
                // Update the appointments table or perform any other necessary actions
            },
            error: function(xhr) {
                // Handle error response
                console.log(xhr.responseText);
                // Display error messages or handle errors as needed
            }
        });
    });
});
