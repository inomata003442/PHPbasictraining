<?php
echo "<head>
    <style type="text/css">
    <--
    dt{float: left;width: 4em;}
    -->
    </style>
    </head>";
//タブを入れて綺麗に表示したい
//CSS使わないとできない事がわかった
//これではいけない

$a = array(1221=>"PHP", 2324=>"JAVA", 3642=>"MYSQL", 4214=>"LINUX", 5121=>"TEL");

echo "<span>";
foreach ($a as $key=>$b){
    echo $key. $b. "<br>";

}
echo "<br>";
$a[5] = "研修";
foreach ($a as $key=>$b){
    echo $key. $b. "<br>";
}
echo "</span>";
?>
