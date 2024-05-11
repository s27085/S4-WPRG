<?php
    setcookie("people", "", time() - 3600, "/");
    foreach ($_COOKIE as $key => $value) {
        foreach ($value as $k => $v) {
            setcookie($key."[".$k."]", "", time() - 3600, "/");
        }
    }
    echo "Cookies removed";
    header("Location: booking.php");
    exit();
?>
