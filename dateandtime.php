
<pre>date(format, timestamp) - returns formatted date string
l-currrent day
j-current date
F-current month
Y- current year
</pre>
<?php
echo date("l j F Y") ;
?>
<hr>
<pre>date_create() returns the current date </pre>
<?php
$date=date_create();

echo date_format($date,"Y/m/d");
?>
<hr>
<pre> The date_format() function returns a date formatted according to the specified format.</pre>
<?php
$date=date_create("2013-03-15");
echo date_format($date,"d/m/y");
?>

<hr>
<pre>The date_diff() function returns the difference between two DateTime objects.</pre>
<?php
$date1=date_create("2013-03-15");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%a days");
?>
<hr>

<pre>The date_modify() function modifies the timestamp.</pre>
<?php
$date=date_create("2013-05-01");
date_modify($date,"-15 days");
echo date_format($date,"Y-m-d");
?>
<hr>

<pre>The date_add() function adds some days, months, years to a date.
date_add(object, interval)
</pre>

<?php
$date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");
?>

<hr> 

<pre> The date_sub() function subtracts some days, months, years from a date.</pre>

<?php
$date=date_create("2013-03-15");
date_sub($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");
?>

<hr>

<pre>date_interval_create_from_date_string(): Creates a DateInterval from a date string.</pre>
<?php
$interval = date_interval_create_from_date_string("2 days");
$date = date_create();
date_add($date, $interval);
echo date_format($date, "Y-m-d"); 
?>

<hr>
<pre>The date_time_set() function sets the time.</pre>
<?php
$date=date_create("2013-05-01");
date_time_set($date,12,24);
echo date_format($date,"Y-m-d H:i");
?>
<hr>

<pre>The date_date_set() function sets a new date.
</pre>
<?php
$date=date_create();
date_date_set($date,2020,10,30);
echo date_format($date,"Y/m/d");
?>
<hr>

<?php
date_default_timezone_set("Asia/Kolkata"); // Sets the default timezone used by all date/time functions
$current_time = date("H:i:s"); 
echo "Current India time: $current_time";
?>

<?php
echo date_default_timezone_get(); //Returns the default timezone used by all date/time functions
?>
<pre> </pre>