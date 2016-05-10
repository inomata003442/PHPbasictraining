<?php
$a = array(1221=>"PHP", 2324=>"JAVA", 3642=>"MYSQL", 4214=>"LINUX", 5121=>"TEL");

echo "dt{float: left;width: 4em;";
//タブを入れて綺麗に表示したい
//CSS使わないとできない事がわかった
//これではいけない

foreach ($a as $key=>$b){
    echo $key. $b. "<br>";

}
echo "<br>";
$a[5] = "研修";
foreach ($a as $key=>$b){
    echo $key. $b. "<br>";
}

echo "}";
?>
