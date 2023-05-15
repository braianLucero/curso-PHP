<?php
$arr = array('f'=>'fruta','c'=>"carne",'m'=>'manzana');

print_r($arr);

foreach($arr as $indice=>&$valor){
    echo 'el valor  '.$valor.' tiene el indice '.$indice.' <br/> ';
}
?>