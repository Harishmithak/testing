<?php
          
                 
      $servername = "localhost:3307";    
      $username = "root";
      $password = "CG-vak123";
      $dbname = "mydb";

          
            $conn = new mysqli($servername, $username, $password, $dbname);
          
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "UPDATE Student
            SET total = m1 + m2 + m3,
                average = (m1 + m2 + m3) / 3";

            if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            } else {
            echo "Error updating record: " . $conn->error;
            }

            $conn->close();
        ?>