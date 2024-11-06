<?php

// Llamar a la función  de obtener el token
include "index.php";
include "get_contact.php";

// Captura los datos de la entrada JSON
$data = json_decode(file_get_contents('php://input'), true);

$token = getToken();

// Setear los headers
header('Content-Type: application/json');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Origin: *');


// Recibe los datos del formulario
$name = isset($data['firstName']) ? trim($data['firstName']) : '';
$phone = isset($data['phone']) ? trim($data['phone']) : '';
$email = isset($data['email']) ? trim($data['email']) : '';
$subject = isset($data['subject']) ? trim($data['subject']) : '';
$cc = isset($data['cc']) ? trim($data['cc']) : '';

// Buscar el contacto
$response_contact = get_contact($token, $cc);

echo json_encode([
    'name' => $name,
    'phone' => $phone,
    'email' => $email,
    'sub' => $subject,
    'tok' => $token,
    'res' => $response_contact,
]);



?>