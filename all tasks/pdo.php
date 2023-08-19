<?php
     
     $servername = "localhost:3307";    
     $username = "root";
     $password = "CG-vak123";
     $dbname = "mydb";



        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO student2 (rollno,name,grade,m1,m2,m3)
        VALUES (?,?,?,?,?,?);");
        $stmt->bind_param( 'ssssss',$rollno, $name, $grade,$m1,$m2,$m3);


        $rollno = 131;
        $name = "harishmitha";
        $grade = "grade7";
        $m1=45;
        $m2=56;
        $m3=78;
        $stmt->execute();

        $rollno = 132;
        $name = "pooja";
        $grade = "grade7";
        $m1=45;
        $m2=56;
        $m3=78;
        $stmt->execute();

        $rollno = 133;
        $name = "dinesh";
        $grade = "grade7";
        $m1=45;
        $m2=56;
        $m3=78;
        $stmt->execute();

        $rollno = 134;
        $name = "saran";
        $grade = "grade7";
        $m1=45;
        $m2=56;
        $m3=78;
        $stmt->execute();

        $rollno = 135;
        $name = "harishmitha";
        $grade = "grade7";
        $m1=45;
        $m2=56;
        $m3=78;
        $stmt->execute();


        echo "New records created successfully";

        $stmt->close();
        $conn->close();
    ?>