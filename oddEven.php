<?php

function oddEven(){
    $even= "<br/>Even Numbers Are : ";
    $odd="<br/> Odd Numbers Are : ";

    for($i=1;$i<=100;$i++)
    {
        if($i%2==0)
        {
         $even.=$i.",";
        }else 
       $odd.=$i.","; 
    }   
    echo ($odd.$even);
}
    oddEven() ;

?>