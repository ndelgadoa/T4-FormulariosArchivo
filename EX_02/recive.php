<?php
// print_r($_POST);
if(!$_POST){
    header('Location: index.php');
}
$operacion = $_POST['operacion'];
echo $operacion. '</br>';

eval("\$operacion = $operacion;");
echo $operacion;

?>
