<?php
// print_r($_POST);
if(!$_POST){
    header('Location: index.php');
}

echo $nombre = $_POST['nombre'].'</br>';
echo $apellido = $_POST['apellido'].'</br>';
echo $alumno_profe = $_POST['alumno_profe'].'</br>';
echo $contrasenya = $_POST['contraseña'].'</br>';
echo $foto = $_POST['foto'].'</br>';
echo $edad = $_POST['edad'].'</br>';
echo $comentarios = $_POST['comentarios'].'</br>';
echo $test =$_POST['test'].'</br>';
?>
