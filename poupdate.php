<?php
          
                 
      $servername = "localhost:3307";    
      $username = "root";
      $password = "CG-vak123";
      $dbname = "mydb";

          
      $conn = mysqli_connect($servername, $username, $password, $dbname);

      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }

            $sql = "UPDATE Student1
            SET total = m1 + m2 + m3,
                average = (m1 + m2 + m3) / 3";

if (mysqli_query($conn, $sql)) {
    echo "New record updated successfully \n";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
        ?>