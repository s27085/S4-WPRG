<?php
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

    include_once 'bookingSummary.phtml';
}
?>
