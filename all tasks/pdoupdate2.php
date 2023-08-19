

<?php
     
     $servername = "localhost:3307";    
     $username = "root";
     $password = "CG-vak123";
     $dbname = "mydb";



        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("UPDATE Student2 SET name=?, grade=? WHERE rollno=?");
        $stmt->bind_param( 'sss',$name, $grade,$rollno);


        $name = "harita"; 
        $grade = "grade 8"; 
        $rollno = "133";
        $stmt->execute();

        echo "New records created successfully";

        $stmt->close();
        $conn->close();
    ?>