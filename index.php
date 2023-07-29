<?php
$sum=0;
$arr=[1,2,3,4,5,-6,3,-2];
foreach($arr as $element){
    if($element>0){
        $sum+=$element;
    }

}
print_r($sum)
?>;