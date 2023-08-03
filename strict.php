<?php
declare(strict_types=1);
function ageChecking(string $name, int $age): string 
{
   if($age>18)
$result="eligible to vote ";
else
$result="not eligible to vote ";
    return "<b><i>$name</i></b> is $result.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p><?= ageChecking('pooja',20) ?></p>
</body>
</html>