<?php

$cgvakFile = fopen("cgvak.txt", "w");

fwrite($cgvakFile,'harishmitha ');
fwrite($cgvakFile,'harita ');
fwrite($cgvakFile,'harshan ');
fwrite($cgvakFile,'yamini ');
fwrite($cgvakFile,'vignesh ');
fwrite($cgvakFile,'srikanth ');
fwrite($cgvakFile,'darshan ');
fwrite($cgvakFile,'hemanth ');
fwrite($cgvakFile,'sharon ');
fwrite($cgvakFile,'arun ');
fwrite($cgvakFile,'sivabharath ');
fwrite($cgvakFile,'karthikeyen ');

fclose($cgvakFile);

echo ('file added successfuly');
echo '<br>';


?>
<?php

$g2File = fopen("g2.txt", "w");

fwrite($g2File,'ranita ');
fwrite($g2File,'selva ');
fwrite($g2File,'venkat ');
fwrite($g2File,'dhanaprakash ');
fwrite($g2File,'vasanth ');
fwrite($g2File,'vikram ');
fwrite($g2File,'hari ');
echo ('file added successfuly');
echo '<br>';

?>
<?php

$cgvakContent = file_get_contents("cgvak.txt");

$g2Content = file_get_contents("g2.txt");

$mergedContent = $cgvakContent . "\n" . $g2Content;

$traineesFile = fopen("trainees.txt", "w");
fwrite($traineesFile, $mergedContent);
fclose($traineesFile);
echo ('file merged successfuly');
echo '<br>';

?>

<?php

unlink("cgvak.txt");
unlink("g2.txt");
echo "g2 and cgvak files are deleted";
echo '<br>';
echo '<br>';
echo '<br>';
?>

<?php  
   
            
            $filename = "D:\\Xampp\\htdocs\\testing\\taskfiles\\trainees.txt";  
            $fp = fopen($filename, "r");
              
            $contents = fread($fp, filesize($filename));  
            echo 'TRAINEES NAMES';
            echo "<pre>$contents</pre>";
            echo "<br>"; 
            fclose($fp);
        ?>  