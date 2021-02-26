<?php
$a = $_POST["n1"];
$b = $_POST["n2"];
$opc = $_POST["accion"];

if($opc == 1){
    echo "La suma es : ".($a + $b);
}

/*

if(isset($_POST('enviar')))
    {
        if($_POST['accion'] === "1"){
        $resul = $_POST['n1'] + $_POST['n2'];
        echo $resul;
    }  
    elseif($_POST['accion'] === "2"){
        $resul = $_POST['n1'] - $_POST['n2'];
    }
    elseif($_POST['accion'] === "3"){
        $resul = $_POST['n1'] * $_POST['n2'];
    }
    else{
        $resul = $_POST['n1'] / $_POST['n2'];
    }
}
*/
?>