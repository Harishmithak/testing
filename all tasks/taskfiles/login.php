
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost:3307";    
$username = "root";
$password = "CG-vak123";
$dbname = "mydb";

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
$login_time=date('Y-m-d H:i:s');
 
    $sql = "INSERT INTO UserLog (username, email,login_time) VALUES ('$username', '$email','$login_time')";
    
    if ($conn->query($sql) === TRUE) {

        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['login_time'] = date('Y-m-d H:i:s');

        if (!isset($_SESSION['login_count'])) {
            $_SESSION['login_count'] = 1;
        } else {
            $_SESSION['login_count']++;
        }
        setcookie('stored_username', $username, time() + 60, "/");
        setcookie('stored_email', $email, time() + 60, "/");

  
//    echo "login count is  :  " . $_SESSION['login_count'];
     header("Location: welcome.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}
?>
