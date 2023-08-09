<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>The addcslashes() function returns a string with backslashes in front of the specified characters.</pre>
<?php
$str = addcslashes("Hello World!","O");
echo($str);
?>
<hr>


<pre>The chunk_split() function splits a string into a series of smaller parts.</pre>
    <pre>chunk_split(string,length,end)</pre>
<?php
$str = "Hello world!";
echo chunk_split($str,1,".");
?>
<hr>



<pre>The strtr() function translates certain characters in a string.</pre>
<pre>strtr(string,from,to)</pre>
<?php
echo strtr(" Hilla Warld","ial","eoi");
?>
<hr>


<pre>The strrpos() function finds the position of the last occurrence of a string inside another string.</pre>
<pre>strrpos(string,find)</pre>
<?php
echo strrpos("I love php, I love php too!","php");
?>
<hr>


<pre> The strrev() function reverses a string.</pre>
<?php
echo strrev("Hello World!");
?>
<hr>

<pre>The str_shuffle() function randomly shuffles all the characters of a string.</pre>
<pre>str_shuffle(string)</pre>
<?php
echo str_shuffle("Hello World");
?>
<hr>

<pre>The lcfirst() function converts the first character of a string to lowercase.</pre>
<?php
echo lcfirst("Hello world!");
?>
<hr>


<pre>The implode() function returns a string from the elements of an array.</pre>
<?php
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
?>
<hr>

<pre>The explode() function breaks a string into an array.</pre>
<?php
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
?>
<hr>

<pre>The str_word_count() function counts the number of words in a string.</pre>
<?php
echo str_word_count("Hello world!");
?>


</body>
</html>