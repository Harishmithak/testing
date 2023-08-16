<?php
      
      $servername = "localhost:3307";    
      $username = "root";
      $password = "CG-vak123";
      $dbname = "mydb";

     
      $conn = mysqli_connect($servername, $username, $password, $dbname);

      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "INSERT INTO Failure1 (RollNumber, StudentName, Grade, m1, m2, m3, Total, Average)
      SELECT rollno, name, grade, m1, m2, m3, total, average
      FROM student1
      WHERE m1 < 40 OR m2 < 40 OR m3 < 40;";

       $sql .= "DELETE FROM student1
       WHERE m1 < 40 OR m2 < 40 OR m3 < 40";
 


 if (mysqli_multi_query($conn, $sql)) {
    echo "New record updated successfully \n";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
  ?>