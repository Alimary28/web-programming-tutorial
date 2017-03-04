<?php

echo "Suma este: ";
echo 4+3;

$name = "Papp";
$a = 4;
$b = 5;

echo " Salut ";
echo $name;
$fname = "Alina";
echo "<br>".$fname . " " .$name;

function getName($fname , $name){
    return $fname ." " . $name;
}
echo "<br>Nume Complet : ".getName($fname , $name);



?>

<h1>Tabla inmultirii</h1>

<br>

<?php


function printTablaInmultirii($num){

    echo "<br>------------";

    for ($i = 1 ; $i <= 10; $i ++){
        $res = $i * $num ;
        echo "<br> $i *  $num  = $res ";

    }
}
for ($i = 1 ; $i <=10 ; $i ++){

    printTablaInmultirii($i);
}

?>

