<h1> welcome </h1>
<?php
session_start();
echo "welcome   ".$_SESSION['username'];
echo '<br>';

echo "login count is  :  " . $_SESSION['login_count'];
if (isset($_COOKIE['stored_username']) && isset($_COOKIE['stored_email'])) {
    $storedUsername = $_COOKIE['stored_username'];
    $storedEmail = $_COOKIE['stored_email'];
    
    echo "<p>Welcome back, $storedUsername! We're glad to see you again. Your email: $storedEmail</p>";
} else {
    echo "<p>Welcome! Please sign in.</p>";
}
?>
