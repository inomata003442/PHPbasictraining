<?php
$a = array(
    0 => array(
        0 => array(
            0 => 'AAA',
            1 => 'AAB',
        ),
        1 => array(
            0 => 'ABA',
            1 => 'ABB',
        ),
    ),
    1 => array(
        0 => array(
            0 => 'BAA',
            1 => 'BAB',
        ),
        1 => array(
            0 => 'BBA',
            1 => 'BBB',
        ),
    ),
);

var_dump($a);
echo "<br>";
foreach($a as $key1 => $value1) {
    foreach($value1 as $key2 => $value2){
        foreach($value2 as $key3 => $value3){
              echo $key1. $key2. $key3. " ". $value3. "<br>";
        }
    }
}
/*
＜＜別回答コメントアウト＞＞
foreach($a as $key1 => $value1) {
    foreach($a[$key1] as $key2 => $value2){
        foreach($a[$key1][$key2] as $key3 => $value3){
              echo $key1. $key2. $key3. " ". $value3. "<br>";
        }
    }
}
*/
?>
