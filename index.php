<!-- 
    BOOK TICKET DEMO PART 1
    - create database
    - create 3 tables 
    - set FKs
    - insert dataset

    DEMO PART 1
    - memberslistings.php
    - registercustomer.php
    - ticketslistings.php

    Demo Part 2
    - login.php
    - editbooking.php
    - ticketdetails.php
    - deleteticket.php
    - bookticket.php
    - editseats.php


    Home Page
    - Customer Listing
    - Flight Listing
    - Ticket Listing
    - Login


    Create a database
    - create a new database named bookticketdb
    - create 3 tables, customer, flight, ticket
        - replace 3 tables, customer, room, booking
    - set FKs
    - insert dataset

    /*
    // ajax example
    $.ajax({
        url: 'example.com/api/data',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            // Handle the response data here
        },
        error: function(xhr, status, error) {
            // Handle any errors that occur during the request
        }
    });
    */


    -	Customer Login
-	New Customer Registration
-	
-	Customer List Search by Lastname
-	Customer Details View
-	Customer Details Update
-	Customer details preview before deletion
-	
-	Add a new room
-	Room list
-	Room Details View
-	Room Details Update
-	Room details preview before deletion
-	
-	Make a booking
-	Current bookings
-	Edit a booking
-	Booking Details View
-	Booking preview before deletion
-	
-	Edit/add room review
-	Make a booking
-	Search for room availability


-->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BNB</title>

    <!-- Include jQuery library and jQuery UI via CDN -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        // Function to update time dynamically using ajax
        function updateTime() {
            $.ajax({
                url: 'getTime.php', // Server-side script to fetch the time
                dataType: 'text',
                success: function(time) {
                    $('#current-time').text('Date: ' + time);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching time: ' + error);
                }
            });
        }

        // Update the time initially
        updateTime();

        // Periodically update the time every 1 second (adjust as needed)
        setInterval(updateTime, 1000);

        /*
        // ajax example to retrieve data from API
        $.ajax({
            url: 'example.com/api/data',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // Handle the response data here
            },
            error: function(xhr, status, error) {
                // Handle any errors that occur during the request
            }
        });
        */
    </script>

</head>

<body>
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1 style="color: orange; margin: 0;">BNB Website</h1>
        <div id="current-time">Loading...</div>
    </div>
    <hr>
    <!-- Check different UI pages with these links -->
    <ul>
        <li><a href="make_booking.php">Make Booking</a></li>
        <li><a href="edit_booking.php">Edit Booking</a></li>
        <li><a href="current_booking.php">Current Booking</a></li>
        <li><a href="booking_details.php">Booking Details</a></li>
        <li><a href="add_room_review.php">Add Room Review</a></li>
        <li><a href="booking_preview_before_delete.php">Booking preview before Delete</a></li>
    </ul>
</body>

</html>