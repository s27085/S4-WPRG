<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $people = $_POST['people'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $creditcard = htmlspecialchars($_POST['creditcard']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $date = $_POST['date'];
        $time = $_POST['time'];
        $bed = isset($_POST['bed']) ? 'Yes' : 'No';
        $amenities = isset($_POST['amenities']) ? $_POST['amenities'] : 'None';

        setcookie("people", $people, time() + 3600, "/");
        for ($i = 0; $i < $people; $i++) {
            $cookieName = "person" . $i;
            setcookie($cookieName . "[fname]", $fname[$i], time() + 3600, "/");
            setcookie($cookieName . "[lname]", $lname[$i], time() + 3600, "/");
            setcookie($cookieName . "[address]", $address[$i], time() + 3600, "/");
        }
    include_once 'summary.php';

}
