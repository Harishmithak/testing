
<?php
     
     $servername = "localhost:3307";    
     $username = "root";
     $password = "CG-vak123";
     $dbname = "mydb";


        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("DELETE FROM Student2 WHERE rollno = ?");
        $stmt->bind_param( 's',$rollno);


        $rollno = "140";
        $stmt->execute();

        echo " records deleted successfully";

        $stmt->close();
        $conn->close();
    ?>

