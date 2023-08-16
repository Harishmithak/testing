<?php
        
        $servername = "localhost:3307";    
        $username = "root";
        $password = "CG-vak123";
        $dbname = "mydb";
  

  
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

 
         // Inserting the record
         $sql = "INSERT INTO student1 (rollno,name,grade,m1,m2,m3)
         VALUES (121,'harishmitha','grade 7',45,55,36);";
       
       $sql .= "INSERT INTO student1 (rollno,name,grade,m1,m2,m3)
       VALUES (122,'pooja','grade 7',48,60,55);";
   
       $sql .= "INSERT INTO student1 (rollno,name,grade,m1,m2,m3)
       VALUES (123,'saran','grade 7',64,54,74);";
   
       $sql .= "INSERT INTO student1 (rollno,name,grade,m1,m2,m3)
       VALUES (124,'dinesh','grade 7',49,67,77);";
   
       $sql .= "INSERT INTO student1 (rollno,name,grade,m1,m2,m3)
       VALUES (125,'jani','grade 7',76,36,66);";

        if (mysqli_multi_query($conn, $sql)) {
        echo "New record created successfully \n";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>