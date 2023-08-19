<?php 
$servername = "localhost:3307";
$username = "root";
$password = "CG-vak123";
$dbname = "mydb";
  
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$studentResult = mysqli_query($conn, "SELECT * FROM student1");
$failureResult = mysqli_query($conn, "SELECT * FROM Failure1");

echo "<h2>Student Records</h2>";
echo "<table border='1'>
        <tr>
            <th>Roll Number</th>
            <th>Student Name</th>
            <th>m1</th>
            <th>m2</th>
            <th>m3</th>
            <th>Total</th>
            <th>Average</th>
        </tr>";

while ($row = mysqli_fetch_assoc($studentResult)) {
    echo "<tr>
            <td>" . $row['rollno'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['m1'] . "</td>
            <td>" . $row['m2'] . "</td>
            <td>" . $row['m3'] . "</td>
            <td>" . $row['total'] . "</td>
            <td>" . $row['average'] . "</td>
        </tr>";
}

echo "</table>";

echo "<h2>Failure Records</h2>";
echo "<table border='1'>
        <tr>
            <th>Roll Number</th>
            <th>Student Name</th>
            <th>m1</th>
            <th>m2</th>
            <th>m3</th>
            <th>Total</th>
            <th>Average</th>
        </tr>";

while ($row = mysqli_fetch_assoc($failureResult)) {
    echo "<tr>
            <td>" . $row['RollNumber'] . "</td>
            <td>" . $row['StudentName'] . "</td>
            <td>" . $row['m1'] . "</td>
            <td>" . $row['m2'] . "</td>
            <td>" . $row['m3'] . "</td>
            <td>" . $row['Total'] . "</td>
            <td>" . $row['Average'] . "</td>
        </tr>";
}

echo "</table>";

mysqli_close($conn);
?>
