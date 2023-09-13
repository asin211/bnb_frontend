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

    <!-- Booking Preview before delete -->
    <div>
        <h1>Booking preview before deletion</h1>
        <h3><a href=''>[Return to the Booking listing]</a><a href=''>[Return to the main page]</a></h3>

        <fieldset>
            <legend>Booking detail #2</legend>
            <dl>
                <dt>Room name:</dt>
                <dd>Kelly</dd>
                <dt>Checkin Date:</dt>
                <dd>2018-09-15</dd>
                <dt>Checkout Date:</dt>
                <dd>2018-09-19</dd>
            </dl>
        </fieldset>
        <form method="POST" action="">
            <h4>Are you sure you want to delete this Booking?</h2>
                <input type="hidden" name="id" value="id">
                <input type="submit" name="submit" value="Delete">
                <a href="">[Cancel]</a>
        </form>
        </table>
    </div>
</body>

</html>