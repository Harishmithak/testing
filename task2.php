<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<?php

$employee = array(
    "EmpID" => 101,
    "EmpName" => "harishmitha",
    "DOJ" => "23/01/2023",
    "Department" => "HR",
    "Address" => array(
        "DoorNo" => "18/23",
        "StreetName" => "MKP colony",
        "Town" => "ganapathy",
        "City" => "coimbatore",
        "Pincode" => 641006,
    ),
    "PhoneNo" => 9994519917,
    "Salary" => array(
        "Basic" => 23000, 
        "DA" => '',
        "HRA"=>'',
        "FA"=> '',
        "PF"=>'',
        "TAX"=>'',
        "GrossPay"=>'',
        "NetPay"=>'',

    ),
);

$basic = $employee['Salary']['Basic'];

if($basic > 20000)
$da=0.585 * $basic;
else if ($basic > 15000)
$da=0.46 * $basic;
else
0.425 * $basic;

$employee["Salary"]["DA"] = $da;

if($basic>20000)
$hra=0.15*$basic;
else if ($basic>15000)
$hra=0.12 * $basic;
else
$hra=1500;
$employee["Salary"]["HRA"] = $hra;


if($basic>20000)
$pf=0.2 * $basic ;
else if ($basic>15000)
$pf=0.15 * $basic;
else
$pf=0.1 * $basic;
$employee["Salary"]["PF"] = $pf;

if($basic>20000)
$tax=0.17 * $basic ;
else if ($basic>15000)
$tax=0.12 * $basic;
else
$tax=0;
$employee["Salary"]["TAX"] = $tax;



if($employee["Department"] === "HR") 
$fa= 2000;
else if ($employee["Department"] === "Tech")
$fa=5000;
else
$fa=2000; 
$employee["Salary"]["FA"] = $fa;

$grossPay = $basic + $da + $hra + $fa;
$deduction = $pf + $tax;
$netPay = $grossPay - $deduction;

$employee["Salary"]["GrossPay"] = $grossPay;
$employee["Salary"]["NetPay"] = $netPay;

echo "Using var_dump():";
echo "<br>";
var_dump($employee);
echo "<br>";
echo "Using print_r():";
echo "<br>";
print_r($employee);
?>

<h2>Employee Details</h2>
    <table>
        <tr>
            <th>EmpID</th>
            <th>EmpName</th>
            <th>DOJ</th>
            <th>Department</th>
            <th>Address</th>
            <th>PhoneNo</th>
            <th>Basic</th>
            <th>DA</th>
            <th>HRA</th>
            <th>FA</th>
            <th>PF</th>
            <th>TAX</th>
            <th>GrossPay</th>
            <th>NetPay</th>
        </tr>
        <tr>
            <td><?php echo $employee["EmpID"]; ?></td>
            <td><?php echo $employee["EmpName"]; ?></td>
            <td><?php echo $employee["DOJ"]; ?></td>
            <td><?php echo $employee["Department"]; ?></td>
            <td>
                <?php
                    $address = $employee["Address"];
                    echo $address["DoorNo"] . ", " . $address["StreetName"] . ", " . $address["Town"] . ", " . $address["City"] . ", " . $address["Pincode"];
                ?>
            </td>
            <td><?php echo $employee["PhoneNo"]; ?></td>
            <td><?php echo $employee["Salary"]["Basic"]; ?></td>
            <td><?php echo $employee["Salary"]["DA"]; ?></td>
            <td><?php echo $employee["Salary"]["HRA"]; ?></td>
            <td><?php echo $employee["Salary"]["FA"]; ?></td>
            <td><?php echo $employee["Salary"]["PF"]; ?></td>
            <td><?php echo $employee["Salary"]["TAX"]; ?></td>
            <td><?php echo $employee["Salary"]["GrossPay"]; ?></td>
            <td><?php echo $employee["Salary"]["NetPay"]; ?></td>
            
        </tr>
    </table>

    <?php
    echo"<br>";
    echo "while loop";
    echo"<br>";
    $a = 1;
    while($a <= 10) {
    echo "The number is: $a <br>";
    $a++;
}
?>
    <?php
    echo"<br>";
    echo "Endwhile loop";
    echo"<br>";
    $a = 1;
    while($a <= 10) :
    echo "The number is: $a <br>";
    $a++;
    endwhile;
?>
<?php
   echo"<br>";
   echo "do while loop";
   echo"<br>";
$a = 1;
do {
  echo "The number is: $a <br>";
  $a++;
} while ($a <= 7);
?>

<?php
   echo"<br>";
   echo "for loop";
   echo"<br>";
for ($a = 0; $a <= 10; $a++) {
  echo "The number is: $a <br>";
}
?>
<?php
echo"<br>";
echo "for each loop";
echo"<br>";
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
  echo "The color is : $value <br>";
}
?>
<?php
echo"<br>";
echo "break";
echo"<br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?>
<?php
echo"<br>";
echo "break 1";
echo"<br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break 1;
  }
  echo "The number is: $x <br>";
}
?>
<?php
echo"<br>";
echo "Continue";
echo"<br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue ;
  }
  echo "The number is: $x <br>";
}
?>
<?php
echo"<br>";
echo "SWITCH";
echo"<br>";
$fav = "blue";

switch ($fav) {
  case "red":
    echo "the color is  red!";
    break;
  case "blue":
    echo "the color is  blue!";
    break;
  case "green":
    echo "the color is  green!";
    break;
  default:
    echo "the color is  neither red, blue, nor green!";
}
?>
<?php
$studentsdetails = array(
    array("name" => "harish", "m1" => 85, "m2" => 90, "m3" => 78,"total"=>'',"average"=>''),
    array("name" => "Janisha", "m1" => 92, "m2" => 88, "m3" => 95,"total"=>'',"average"=>''),
    array("name" => "saran", "m1" => 78, "m2" => 87, "m3" => 80,"total"=>'',"average"=>''),
    array("name" => "pooja", "m1" => 90, "m2" => 85, "m3" => 92,"total"=>'',"average"=>''),
    array("name" => "dinesh", "m1" => 88, "m2" => 92, "m3" => 84,"total"=>'',"average"=>'')
);



foreach ($studentsdetails as $key => $student) {
   
    $total = $student['m1'] + $student['m2'] + $student['m3'];
    $studentsdetails[$key]['total'] = $total;

    $average = $total / 3;
    $studentsdetails[$key]['average'] = $average;
}

?>
<table>
        <tr>
            <th>Name</th>
            <th>Mark 1</th>
            <th>Mark 2</th>
            <th>Mark 3</th>
            <th>Total</th>
            <th>Average</th>
        </tr>
        <?php foreach ($studentsdetails as $student) : ?>
            <tr>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['m1']; ?></td>
                <td><?php echo $student['m2']; ?></td>
                <td><?php echo $student['m3']; ?></td>
                <td><?php echo $student['total']; ?></td>
                <td><?php echo $student['average']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>