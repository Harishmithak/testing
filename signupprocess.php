
  
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    if (empty($username) || empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {
  
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
        } else {
            
            echo "User account created successfully!<br>";
            echo "Username: " . $username . "<br>";
            echo "Email: " . $email . "<br>";
        }
    }
}
?>
