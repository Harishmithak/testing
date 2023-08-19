<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform validation and query the database
    $sql = "SELECT * FROM user WHERE username = '$username' AND email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // Successful login
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['login_time'] = date('Y-m-d H:i:s');

        if (!isset($_SESSION['login_count'])) {
            $_SESSION['login_count'] = 1;
        } else {
            $_SESSION['login_count']++;
        }

        // Store username and email in cookies

        setcookie('username', $row['username'],time()+1*60*1, "/");
        setcookie('email', $row['email'], time()+1*60*1, "/");

        // Redirect to some page after successful login
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials
        echo "Invalid username, email, or password.";
    }

    $conn->close();
}
?>

<?php
session_start();

// Check if stored_username and stored_email cookies are set
if (isset($_COOKIE['username']) && isset($_COOKIE['email'])) {
    $storedUsername = $_COOKIE['username'];
    $storedEmail = $_COOKIE['email'];
    
    echo "Welcome back, $storedUsername! We're glad to see you again. Your email: $storedEmail";
} else {
    echo "Welcome! Please sign in.";
}
?>

