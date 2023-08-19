
<?php
     $servername = "localhost:3307";    
     $username = "root";
     $password = "CG-vak123";
     $dbname = "mydb";

        try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       
          $stmt = $conn->prepare("INSERT INTO student2 (rollno,name,grade,m1,m2,m3)
          VALUES (:rollno,:name,:grade,:m1,:m2,:m3);");
          $stmt->bindParam(':rollno', $rollno);
          $stmt->bindParam(':name', $name);
          $stmt->bindParam(':grade', $grade);
          $stmt->bindParam(':m1', $m1);
          $stmt->bindParam(':m2', $m2);
          $stmt->bindParam(':m3', $m3);

          $rollno = 136;
          $name = "harishmitha";
          $grade = "grade7";
          $m1=45;
          $m2=56;
          $m3=78;
          $stmt->execute();
  
          $rollno = 137;
          $name = "pooja";
          $grade = "grade7";
          $m1=45;
          $m2=56;
          $m3=78;
          $stmt->execute();
  
          $rollno = 138;
          $name = "dinesh";
          $grade = "grade7";
          $m1=45;
          $m2=56;
          $m3=78;
          $stmt->execute();
  
          $rollno = 139;
          $name = "saran";
          $grade = "grade7";
          $m1=45;
          $m2=56;
          $m3=78;
          $stmt->execute();
  
          $rollno = 140;
          $name = "harishmitha";
          $grade = "grade7";
          $m1=45;
          $m2=56;
          $m3=78;
          $stmt->execute();


          echo "New records created successfully";
        } catch(PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
        $conn = null;
    ?>