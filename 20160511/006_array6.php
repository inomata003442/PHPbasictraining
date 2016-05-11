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

/*
$a[0][0][0] = 'AAA';
$a[0][0][1] = 'AAB';
$a[0][1][0] = 'ABA';
$a[0][1][1] = 'ABB';
$a[1][0][0] = 'BAA';
$a[1][0][1] = 'BAB';
$a[1][1][0] = 'BBA';
$a[1][1][1] = 'BBB';
*/

var_dump($a);

?>
