

INSERT INTO Failure (RollNumber, StudentName, Grade, m1, m2, m3, Total, Average)
SELECT RollNumber, StudentName, Grade, m1, m2, m3, Total, Average
FROM Student
WHERE m1 < 40 OR m2 < 40 OR m3 < 40;

DELETE FROM Student
WHERE m1 < 40 OR m2 < 40 OR m3 < 40;
<?php
      
      $servername = "localhost:3307";    
      $username = "root";
      $password = "CG-vak123";
      $dbname = "mydb";

     
      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO Failure (RollNumber, StudentName, Grade, m1, m2, m3, Total, Average)
      SELECT rollno, name, grade, m1, m2, m3, total, average
      FROM student
      WHERE m1 < 40 OR m2 < 40 OR m3 < 40;";

       $sql .= "DELETE FROM student
       WHERE m1 < 40 OR m2 < 40 OR m3 < 40";
 


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully \n";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

      $conn->close();
  ?>

