 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
  
    if (empty($username) || empty($password)) {
        echo "Both username and password are required.";
    } else {

        if (preg_match("/^[a-zA-Z0-9]+$/", $username)) {
            echo "Welcome, $username!";
        } else {
            echo "Invalid username format.";
        }
    }
}
?>
