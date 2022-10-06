<?php
// print_r($_POST);
if(!$_POST){
    header('Location: index.php');
}
$numero = $_POST['numero'];
for ($i=1;$i<=$numero; $i++) {
    echo 'Hay '. $numero.'lineas'.'</br>';
}



?>

