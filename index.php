
<?php

$array = array('9','45','9','1');


echo "<pre>";
print_r($array);


$count = count($array) ;

for ($i = 0; $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo '<pre>' . "<br/>";
print_r($array);

echo 'min number= '.$array[0];
echo '<br>';
echo 'max number= '.$array[$count-1];
