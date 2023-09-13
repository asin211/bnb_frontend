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
</head>

<body>
    <h1 style="color: orange;">BNB Website</h1>
    <hr>

    <!-- Edit a Booking -->
    <div>
        <h1>Edit a Booking</h1>
        <h3>
            <a href="">[Return to the Booking listing]</a><a href="">[Return to the main page]</a>
        </h3>

        <h3>Booking made for Test</h3>
        <form action="" method="post">
            <label for="room">Room (name,type,beds): </label>
            <input type="text" required placeholder="Kellie, S, 5">
            <br><br>

            <label for="">Checkin Date: </label>
            <input type="text" id="fromDate" name="fromDate" placeholder="2023-10-16" required>
            <br><br>

            <label for="">Checkout Date: </label>
            <input type="text" id="toDate" name="toDate" placeholder="2023-10-18" required>
            <br><br>

            <label for="">Contact Number: </label>
            <input type="tel" name="phone" required placeholder="(001) 123 1234" pattern="[\(]\d{3}[\)] \d{3} \d{4}">
            <br><br>

            <label for="extras">Booking Extras: </label>
            <textarea id="extras" name="extras" maxlength="100" rows="4" cols="30">Nothing</textarea>
            <br><br>

            <label for="review">Room Review: </label>
            <textarea id="review" name="review" maxlength="200" rows="4" cols="30">Nothing</textarea>
            <br><br>

            <button>Update</button><a href="">[Cancel]</a>
        </form>
    </div>
</body>

</html>