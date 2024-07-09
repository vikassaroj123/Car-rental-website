$(document).ready(function() {
    // Fetch dashboard data via AJAX
    $.ajax({
        url: '../api/dashboard_data.php',
        method: 'GET',
        success: function(response) {
            const data = JSON.parse(response);
            if (data.user_type === 'agency') {
                // Display agency dashboard data
                $('#dashboard-content').html(`
                    <h2 class="text-center">Agency Dashboard</h2>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">${data.name}</h5>
                            <p class="card-text">Email: ${data.email}</p>
                            <p class="card-text">Total Cars Added: ${data.total_cars}</p>
                            <p class="card-text">Total Bookings: ${data.total_bookings}</p>
                            <a href="add_car.php" class="btn btn-primary">Add New Car</a>
                            <a href="view_booked_cars.php" class="btn btn-primary">View Booked Cars</a>
                            <a href="../api/logout.php" class="btn btn-danger float-right">Logout</a>
                        </div>
                    </div>
                `);
            } else if (data.user_type === 'customer') {
                // Display customer dashboard data
                $('#dashboard-content').html(`
                    <h2 class="text-center">Customer Dashboard</h2>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">${data.name}</h5>
                            <p class="card-text">Email: ${data.email}</p>
                            <p class="card-text">Total Bookings: ${data.total_bookings}</p>
                            <a href="available_cars.php" class="btn btn-primary">Available Cars</a>
                            <a href="../api/logout.php" class="btn btn-danger float-right">Logout</a>
                        </div>
                    </div>
                `);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching dashboard data:', error);
        }
    });
});
