<?php
define('num1','1');
define('num2','2');
define('num3','3');
define('num4','4');
$operator=num1;
  $result = null;
switch($operator){
    case num1:
        $result='Зима';
        break;
        case num2:
            $result='Весна';
            break;
            case num3:
                $result='Літо';
                break;
                case num4:
                    $result='Осінь';
                    break;
              default:
              $result='Помилка вибору';
}
if(isset($result)){
    echo $result;
}
?>