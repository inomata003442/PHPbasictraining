<?php
$a = array(8=>"PHP", 168=>"JAVA", 19=>"MYSQL", 401=>"LINUX", 511=>"TEL");
foreach ($a as $key=>$b){
    echo $key. " ". $b. "<br>";
}
echo "<br>";
$a[5] = "研修";
foreach ($a as $key=>$b){
    echo $key. " ". $b. "<br>";
}
?>
