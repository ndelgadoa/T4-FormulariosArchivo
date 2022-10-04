<?php
// print_r($_POST);
if(!$_POST){
    header('Location: index.php');
}
$nombre = $_POST['nombre'];
echo 'Hola, ' . $nombre. ' tiene '. strlen($nombre). ' letras';

?>
