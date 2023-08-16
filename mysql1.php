<pre>Create Student table in MySQl with RollNumber, Studentname, grade, m1, m2, m3, total and average as columns and do the following using SQLi(OO):
a.	Insert at least 5 records (Insert only Rollno,name,and 3 marks)
b.	Update total and average of all the records: total=m1+m2+m3 and average=total/3
c.	If the student is failed in any one of the subject (got less than 40 mark in any one of the subject),
 copy the record in the Failure table and delete the record from Student table. </pre>

 <?php
      
      $servername = "localhost:3307";    
      $username = "root";
      $password = "CG-vak123";
      $dbname = "mydb";

     
      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO student (rollno,name,grade,m1,m2,m3)
      VALUES (121,'harishmitha','grade 7',45,55,36);";
    
    $sql .= "INSERT INTO student (rollno,name,grade,m1,m2,m3)
    VALUES (122,'pooja','grade 7',48,60,55);";

    $sql .= "INSERT INTO student (rollno,name,grade,m1,m2,m3)
    VALUES (123,'saran','grade 7',64,54,74);";

    $sql .= "INSERT INTO student (rollno,name,grade,m1,m2,m3)
    VALUES (124,'dinesh','grade 7',49,67,77);";

    $sql .= "INSERT INTO student (rollno,name,grade,m1,m2,m3)
    VALUES (125,'jani','grade 7',76,36,66);";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully \n";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

      $conn->close();
  ?>

