<?php 
$array = array(1, 6, 23, 10, 3, 2, 15,7);

for ($i=0; $i < count($array); $i++) { 
        for ($j=$i+1; $j < count($array); $j++) { 
            if($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    echo "<pre>";
    print_r($array);
?>