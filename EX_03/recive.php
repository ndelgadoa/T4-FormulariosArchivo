<?php
// print_r($_POST);
if(!$_POST){
    header('Location: index.php');
}
$numero = $_POST['numero'];
for ($i=0;$i<=$numero; $i++) {
    echo 'la mama de la mama '. $numero.'</br>';
}



?>

