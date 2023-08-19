<?php $servername = "localhost:3307";
$username = "root";
$password = "CG-vak123";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$studentResult = $conn->query("SELECT * FROM student");
$failureResult = $conn->query("SELECT * FROM Failure");

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

while ($row = $studentResult->fetch_assoc()) {
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

while ($row = $failureResult->fetch_assoc()) {
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

$conn->close();
?>