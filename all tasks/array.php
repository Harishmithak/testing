<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>The array_pop() function deletes the last element of an array.</pre>
<?php
$a=array("red","green","blue");
print_r($a);
echo "<br>";

array_pop($a);
echo "using array_pop() ";
echo "<br>";
print_r($a);
?>
<hr>



<pre>The array_push() function inserts one or more elements to the end of an array.</pre>
<pre>syntax: array_push(array, value1, value2, ...)</pre>
<?php
$a=array("red","green");
echo "original array";
echo "<br>";
print_r($a);
echo "<br>";
array_push($a,"blue","yellow",2,3);
echo " array after inserting :";
echo "<br>";
print_r($a);
?>
<hr>


<pre>The array_sum() function returns the sum of all the values in the array.</pre>
<pre>syntax : array_sum(array)</pre>
<?php
$a=array(1,2,3,4,5.5);
echo "the sum is :".array_sum($a);
?>
<hr>

<pre>The current() function returns the value of the current element in an array.</pre>
<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>"; // the current element is peter
echo next($people) . "<br>";  // joe 
echo next($people) . "<br>";  // glenn
echo current($people) . "<br>"; // the current element is glenn
echo reset($people) . "<br>"; // Moves  to the first element // peter
?>
<hr>


<pre>The array_unique() function removes duplicate values from an array. 
    If two or more array values are the same, the first appearance will be kept and the other will be removed.
</pre>
<?php
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
?>
<hr>

<pre>The array_merge() function merges one or more arrays into one array.</pre>
<?php
$a1=array("red","green");
$a2=array("blue","yellow","green");

print_r(array_merge($a1,$a2));
?>
<hr>

<pre>The array_product() function calculates and returns the product of an array.</pre>

<?php
$a=array(5,5,2,3);
echo(array_product($a));
?>
</body>
</html>