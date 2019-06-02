
<p style="display: flex; justify-content: center">
<?php
$oneYearTime = (24 * 3600) * 365;

if (isset($_COOKIE['visits'])) {
    echo 'Welcome, you have visited us ' . $_COOKIE['visits'] . ' times so far';
    $_COOKIE['visits']++;
    setcookie('visits', $_COOKIE['visits'], time() + $oneYearTime);
} else {
    echo 'Welcome to our page for the first time';
    setcookie('visits', 1, time() + $oneYearTime);
}

?>
</p>