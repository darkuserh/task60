<?php
$lang='uk';
$day=1;
switch($day){
    case 1;
    if( $lang === 'uk'){
        echo 'Понеділок';
    }else{
        echo 'Monday';
    } 
   break;
    case 2;
    if( $lang === 'uk'){
        echo 'Вівторок';
    }else{
        echo 'Tuesday';
    } 
   break;
   case 3;
   if( $lang === 'uk'){
       echo 'Середа';
   }else{
       echo 'Wednesday';
   } 
  break;
    case 4;
    if( $lang === 'uk'){
        echo 'Четвер';
    }else{
        echo 'Thursday';
    }
    break; 
    case 5;
    if( $lang === 'uk'){
        echo 'Пятниця';
    }else{
        echo 'Friday';
    }
    break; 
    case 6;
    if( $lang === 'uk'){
        echo 'Субота';
    }else{
        echo 'Saturday';
    }

    break;
    case 7;
    if( $lang === 'uk'){
        echo 'Неділя';
    }else{
        echo 'Sunday';
    }

    break;
}
?>;