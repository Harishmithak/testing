<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function Stringvalue(...$strings) {
    $result = $strings;
    return $result;
}

$inputStrings = array("Harish", "pooja", "dinesh", "saran", "gokul");
$result= Stringvalue(...$inputStrings);

print_r($result);
echo"<br>";
?>
<hr>
<?php
function check($arg1, $arg2) {
    if (is_numeric($arg1) && is_numeric($arg2)) {
       
        return $arg1 * $arg2;
    } else {
       
        return $arg1 . $arg2;
    }
}
echo check(3, 5);
echo"<br>";
echo check(2.5, 4); 
echo"<br>";
echo check("Hello ", "world!"); 
echo"<br>";
echo check("welcome","home"); 
echo"<br>";

?>
<hr>


<?php
      
        $a = 'strlen';
echo "the length is :".$a('php'); // 3
echo "<br>";
        $b = 'strcmp';
        echo "string compare:".$b('hey','heyy'); // -1
      echo "<br>";
      $c = 'str_word_count';
      echo $c("hey there "); // 2
    echo "<br>";

    $m1='min';
    echo $m1(10,20,30,40,50); //10
    echo "<br>";
    $m2='max';
    echo $m2(10,20,30,40,50); //50
    echo "<br>";
    $m3='sqrt';
    echo $m3(10); //3.1622776601684
    echo "<br>";
    ?>
    <hr>
    <?php

function c_interest($P = 100, $N = 10, $R = 50)
{
   
    $SI = ($P * $N * $R) / 100;

echo"<br>";
    $CI = $P * (pow(1 + ($R / 100), $N)) - $P;

   ?>

    <span>Simple Interest: <?= $SI ?></span><br>
    <span>Compound Interest: <?= $CI ?></span>
    <?php
}


c_interest(); 
c_interest(200,40,12); 
?>
<hr>
<form method="post">  
                Enter Principal Amount:: <input type="number" name="first"/><br><br>  
                Enter no of years : <input type="number" name="second"/><br><br>  
                Enter rate of interest: <input type="number" name="third"/><br><br>  
                <input type="submit" name="si" value="SIMPLE INTEREST "/>  
                <input type="submit" name="ci" value="COMPOUND INTEREST "/>  
            </form>  

            <?php  
            function SIMPLE($P,$N,$R)    
            {  
           $si=($P * $N * $R) / 100;
           echo "simple interest :".$si;
            }  
            function COMPOUND($P,$N,$R)    
            {  
                $ci = $P * (pow(1 + ($R / 100), $N)) - $P;
                echo "compound interest :".$ci;
            } 
            if(isset($_POST['si']))  
            {  
                SIMPLE($_POST['first'],$_POST['second'],$_POST['third']);  
                
            }     
            if(isset($_POST['ci']))  
            {  
                COMPOUND($_POST['first'],$_POST['second'],$_POST['third']);  
          
            }  
         ?>  
         <hr>
         <?php 
class example{
    
    function __call($name,$arg){
        
        if($name == 'sum'){
        switch(count($arg)){
        case 2: return $arg[0]+$arg[1];
     
            }
        }
        if($name == 'prod'){
            switch(count($arg)){
                case 3: return $arg[0]*$arg[1]*$arg[2];
                }
            }
    }
    
}

$sum = new example();

echo "adding two numbers :" . $sum->sum(2,8) ."<br>";
echo "product of 3 numbers  :" . $sum->prod(1,2,8)."<br>";
?>
</body>
</html>