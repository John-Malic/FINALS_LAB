<?php
// cookies.php

// Set a cookie
$cookie_name = "Bitter";
$cookie_value = "Alyssa";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 30 day expiration

// Retrieve the cookie if it exists
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie is not set!";
}


?>
