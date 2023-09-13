<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BNB</title>

    <!-- Include jQuery and jQuery UI via CDN -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize the "From" datepicker
            $("#fromDate").datepicker({
                dateFormat: "yy-mm-dd",
                numberOfMonths: 2,
                changeYear: true,
                changeMonth: true,
                showOtherMonths: true,
                minDate: 0, // Minimum date allowed is today
                onSelect: function(selectedDate) {
                    // Update minDate of "To" datepicker when "From" date is selected
                    $("#toDate").datepicker("option", "minDate", selectedDate);
                },
                /*
                showWeek: true,
                weekHeader: "Weeks",
                minDate: new Date(2023, 0, 1),
                maxDate: new Date(2024, 0, 1),
                yearRange: "2020:2024"
                */
            });

            // Initialize the "To" datepicker
            $("#toDate").datepicker({
                dateFormat: "yy-mm-dd",
                numberOfMonths: 2,
                changeYear: true,
                changeMonth: true,
                showOtherMonths: true,
                minDate: 0 // Minimum date allowed is today
            });

            // Initialize the "From" datepicker for search functionality
            $("#fromDate1").datepicker({
                dateFormat: "yy-mm-dd",
                numberOfMonths: 2,
                changeYear: true,
                changeMonth: true,
                showOtherMonths: true,
                minDate: 0, // Minimum date allowed is today
                onSelect: function(selectedDate) {
                    // Update minDate of "To" datepicker when "From" date is selected
                    $("#toDate1").datepicker("option", "minDate", selectedDate);
                },
            });

            // Initialize the "To" datepicker for search functionality
            $("#toDate1").datepicker({
                dateFormat: "yy-mm-dd",
                numberOfMonths: 2,
                changeYear: true,
                changeMonth: true,
                showOtherMonths: true,
                minDate: 0 // Minimum date allowed is today
            });
        });

        // Function to search for Bookings based on selected date range
        function searchBookings() {
            var fromDate = $("#fromDate1").val();
            var toDate = $("#toDate1").val();

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {


                if (this.readyState == 4 && this.status == 200) {
                    // Display the search results in the 'result' element
                    $("#result").html(this.responseText);
                }
            }

            // Send an asynchronous GET request to 'filter.php' with selected date parameters
            xhttp.open("GET", "filter.php?fromDate=" + fromDate + "&toDate=" + toDate, true);
            xhttp.send();

        }
    </script>
</head>

<body>
    <h1 style="color: orange;">BNB Website</h1>
    <hr>

    <!-- Make Booking -->
    <div>
        <h1>Make a Booking</h1>
        <h3>
            <a href="">[Return to the Booking listing]</a><a href="">[Return to the main page]</a>
        </h3>

        <h3>Booking for Test</h3>
        <form action="" method="post">
            <label for="room">Room (name,type,beds): </label>
            <input type="text" required placeholder="Kellie, S, 5">
            <br><br>

            <label for="">Checkin Date: </label>
            <input type="text" id="fromDate" name="fromDate" placeholder="yyyy-mm-dd" required>
            <br><br>

            <label for="">Checkout Date: </label>
            <input type="text" id="toDate" name="toDate" placeholder="yyyy-mm-dd" required>
            <br><br>

            <label for="">Contact Number: </label>
            <input type="tel" name="phone" required placeholder="(###) ### ####" pattern="[\(]\d{3}[\)] \d{3} \d{4}">
            <br><br>

            <label for="extras">Booking Extras: </label>
            <textarea id="extras" name="extras" maxlength="100" rows="4" cols="30"></textarea>
            <br><br>

            <!-- <p><button>Sign me up!</button></p> -->
            <button>Add</button><a href="">[Cancel]</a>
        </form>
        <hr>

        <!-- Search for room availability -->
        <div class="container">
            <h2>Search for room availability</h2>

            <form action="" method="post">
                <label for="">Start Date: </label>
                <input type="text" id="fromDate1" name="fromDate1" placeholder="yyyy-mm-dd" required>

                <label for="">End Date: </label>
                <input type="text" id="toDate1" name="toDate1" placeholder="yyyy-mm-dd" required>

                <input type="submit" value="Search Availability" onclick="searchBookings()">

            </form>
            <br>
            <table border="1">
                <thead>
                    <tr>
                        <th>Room #</th>
                        <th>Roomname</th>
                        <th>Room Type</th>
                        <th>Beds</th>
                    </tr>
                </thead>
                <tr>
                    <td>2</td>
                    <td>Herman</td>
                    <td>D</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Scarlett</td>
                    <td>D</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Jelani</td>
                    <td>S</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Sonya</td>
                    <td><Samp></Samp></td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Miranda</td>
                    <td>D</td>
                    <td>2</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>