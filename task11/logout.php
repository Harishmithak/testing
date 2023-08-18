<?php
session_start();
session_destroy();


// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//  $servername = "localhost:3307";    
// $username = "root";
// $password = "CG-vak123";
// $dbname = "mydb";

//     $conn = new mysqli($servername, $username, $password, $dbname);


//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $logout_time=date('Y-m-d H:i:s');
   




 
//     $sql = "INSERT INTO UserLog (logout_time) VALUES ('$logout_time')";
    
//     if ($conn->query($sql) === TRUE) {

//         $_SESSION['logout_time'] = date('Y-m-d H:i:s');
        

      
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
//     $stmt->close();
//     $conn->close();

// }

?>

