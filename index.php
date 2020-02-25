<?php
$arr = [1,2,3,4,54,4,5];

$temp = [];

    for($j=count($arr)-1;$j>=0;$j--)
    {
       array_push($temp,$arr[$j]);
    }
    //print_r($temp);

$cus = [];
foreach($temp as $val)
{
    if(array_key_exists($val, $cus))
    {
        $cus[$val] = $cus[$val] + 1;
    }
    else{
        $cus[$val] = 1;
    }
}
foreach($cus as $key=>$val)
{
    echo $key.PHP_EOL;
}

?>
