<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $STRING = "Hello world!";
    echo $STRING;
    echo "<br>";
    $INT=23;
    echo $INT;
    echo "<br>";
    $FLOAT=23.6;
    echo $FLOAT;
    echo "<br>";
    $BOOLEAN = true;
    echo $BOOLEAN;
    echo "<br>";
    $cars = array("Volvo","BMW","Toyota");
    echo $cars[0];
    echo "<br>";
    $dec = 23;  
    echo $dec;
    echo "<br>";
    $oct = 0673;  
    echo $oct;
    echo "<br>";
    $hexa = 0x55;  
    echo $hexa;
    echo "<br>";

    class CAR {  
        function model() {  
             $CARname = "VOLKSVAGEN";  
             echo "CAR NAME: " .$CARname;  
           
             echo "<br>";
           }  
}  
   $obj = new CAR();  
   $obj -> model();  

            $name="HARISH";  
            ${$name}="MITHA";  
            ${${$name}}="HARISHMITHA";  
            echo $name. "<br>";  
            echo ${$name}. "<br>";  
            echo ${${$name}}. "<br>"; 
            echo $HARISH. "<br>";  
            echo $MITHA. "<br>";  

            define("MESSAGE", "Welcome to php");
            echo MESSAGE;
            echo "<br>";
            const MESSAGE1="CONSTANT EXAMPLE";  
            echo MESSAGE1; 
            echo "<br>";
  
    ?>
<?php

$txt = "PHP"; //global variable

function message(){
global $txt;
$msg='welcome'; //local variable 
echo $msg."I love $txt!"; //welcome i love php
echo "<br>";
}
message();

echo "I love $txt!";
echo "<br>"; // i love php
//echo $msg; // undefined variable
?>
<?php
function checking($name, $age)
{
   
    static $working = 0;
    static $retired = 0;

    if ($age > 60) {
        $retired++;
    } else {
        $working++;
    }

    echo "$name is $age years old. ";

    if ($age > 60) {
        echo "Retired".'<br>';
    } else {
        echo "Working".'<br>';
    }
    echo "Number of working persons: " . $working . "<br>";
    echo "Number of retired persons: " . $retired . "<br>";
}
checking("harish", 45);
checking("ranita", 68);
checking("priya", 35);
checking("harita", 70);
?>
<?php

$intValue = 42;
$floatValue = (float) $intValue;
$stringValue = (string) $intValue;
// String to int
$numberString = "123";
$intFromString = (int) $numberString;
// String to float 
$floatFromString = (float) $numberString;
// Boolean to string 
$trueBool = true;
$falseBool = false;
$stringFromTrueBool = (string) $trueBool;
$stringFromFalseBool = (string) $falseBool;
// Print the results
echo "Type Conversion Examples:\n";
echo "Integer to Float: $floatValue\n";
echo "Integer to String: $stringValue\n";
echo "String to Integer: $intFromString\n";
echo "String to Float: $floatFromString\n";
echo "Boolean to String (True): $stringFromTrueBool\n";
echo "Boolean to String (False): $stringFromFalseBool\n";
echo "<br />";
?>
<?php   
	    $employee= array ("HARISHMITHA", 23, "COIMBATORE");
	 
       echo "<br />";
	    echo "EMPLOYEE NAME: $employee[0] </br>";  
	    echo "EMPLOYEE AGE : $employee[1] </br>";  
	    echo "EMPLOYEE CITY: $employee[2] </br>";  
        $SALARY= array (200,100,23000);

	    echo "INCENTIVE: $SALARY[0] </br>";  
	    echo "TAX : $SALARY[1] </br>";  
	    echo "EMPLOYEE SALARY: $SALARY[2] </br>";  
	?>  
</body>
</html>
