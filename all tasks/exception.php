<?php

function is_prime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n%$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }

function calculate($element) {
    if ($element % 10 === 0) {
        throw new Exception("Element should not be the multiples of 10");
        
    }
    if (is_prime($element)) {
        throw new Exception("PrimeNumberException");
    }
else{
    echo "Element: $element, Square: " . ($element ** 2);}
    echo"<br>";
}
$random_values = [];

for ($i = 0; $i < 10; $i++) {
    $random_values[] = rand(10, 100);
}
foreach ($random_values as $value) {
    try {
        calculate($value);
    } catch (Exception $e) {
        if ($e->getMessage() === "PrimeNumberException") {
            echo "Error: Prime number found: $value";
            echo"<br>";
        } else {
            echo "Error: " .$value. $e->getMessage() ;
            echo"<br>";
        }
    }
}

?>
