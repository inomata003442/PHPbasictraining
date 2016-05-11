<?php
$a = ['Akira'=>1, 3=>2, 'Z'=>'Hello', 'KeyEX'=>'World'];
var_dump($a);
echo "<br/><br/>";
foreach ( $a as $key => $value) {
  echo $key .",". $value ."<br/>";
}
?>
