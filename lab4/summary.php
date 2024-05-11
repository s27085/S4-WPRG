<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking Summary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Konrad Fijałkowski">
    <link rel="stylesheet" href="css/summary.css">
</head>
<body>
    <h1>Booking summary</h1>
    <section>
        <div id="col1">
            <p>Number of people</p>
            <?php
            for($i = 0; $i < $people; $i++){
                echo "<p>Person ".($i+1)."</p>";
            }
            ?>
            <p>Credit card number</p>
            <p>E-mail</p>
            <p>Date</p>
            <p>Time</p>
            <p>Extra bed for child</p>
            <p>Amenities</p>
        </div>
        <div id="col2">
            <?php
            echo "<p>$people</p>";
            for($i = 0; $i < $people; $i++){
                echo "<p>$fname[$i] $lname[$i] $address[$i]</p>";
            }
            echo "<p>$creditcard</p>";
            echo "<p>$email</p>";
            echo "<p>$date</p>";
            echo "<p>$time</p>";
            echo "<p>$bed</p>";
            echo "<p>$amenities</p>";

            foreach ($_COOKIE['COOKIE'] as $key => $value) {
                $key = htmlspecialchars($key);
                $value = htmlspecialchars($value);
                echo "$key : $value <br>";
            }
            ?>
        </div>
    </section>
    <form action="booking.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>
