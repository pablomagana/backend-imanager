<?php
header('Access-Control-Allow-Origin: *');
$target_path = 'uploads/';

$target_path = $target_path.basename($_FILES['file']['name']);
$data=[];
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)){
    header('Content-type: application/json');
    $data = ['success' => true, 'message'=> 'Imagen subida correctamente'];
} else {
    header('Content-type: application/json');
    $data = ['sucess' => false, 'message' => 'Error al subir la imagen'];
}
echo json_encode($data);
