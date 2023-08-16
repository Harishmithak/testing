<?php

   $servername = "localhost:3307";    
   $username = "root";
   $password = "CG-vak123";
   $dbname = "mydb";

 
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "UPDATE Student2
        SET total = m1 + m2 + m3,
            average = (m1 + m2 + m3) / 3";

        if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        } else {
        echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>