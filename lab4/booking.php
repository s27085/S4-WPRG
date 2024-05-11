<?php
session_start();
if (!isset($_SESSION['logged'])) {
    header("Location: failedLogin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hotel Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Konrad Fijałkowski">
        <script src="js/script.js" async></script>
        <link rel="stylesheet" href="css/booking.css">
    </head>
    <body>
    <header>
        <form action="removedCookies.php" method="post">
            <button type="submit">Remove cookies</button>
        </form>
        <form action="logout.php" method="post">
            <button type="submit">Log out</button>
        </form>
    </header>
    <?php
    echo "<h2>Hello ".$_COOKIE['username']."!</h2>";
    ?>
    <form action="handleBooking.php" method="post">
        <fieldset>
            <section>
                <label for="people">Number of people:</label>
                <select name="people" id="people" required>
                    <option value="0">Choose from list</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </section>
            <section>
                <div id="basicInfo">
                </div>
                <label for="creditcard">Credit card number:</label>
                <input type="text" id="creditcard" name="creditcard" <!--required--><br>
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" <!--required-->><br>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" <!--required-->><br>
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" <!--required-->><br>
                <label for="amenities">Amenities:</label>
                <select name="amenities">
                    <option value="" selected disabled>Choose from the list</option>
                    <option value="Air conditioning">Air conditioning</option>
                    <option value="Ashtray">Ashtray</option>
                </select><br>
                <label for="bed">Extra bed for a child</label>
                <input type="checkbox" id="bed" name="bed" value="bed">
            </section>
            <button type="submit" id="defSubmit">Submit</button>
        </fieldset>
    </form>
</html>
