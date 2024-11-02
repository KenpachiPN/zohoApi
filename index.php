<?php

// Iniciar curl
$ch = curl_init();

// Url de la api
$api_url = "https://accounts.zoho.com/oauth/v2/token";

// Configurar las opciones del curl
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);


// Definir headers
$headers = [
    'Content-Type: application/x-www-form-urlencoded'
];

// Establecer los headers
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Configurar el cuerpo de la solicitud
$data = http_build_query([
    'refresh_token' => '1000.0f73677ad0e2a1630a3da4ce7aa7695f.d5c4320c68312afffdf17acd9afa1949',
    'client_id' => '1000.Y9U4433FXWGGFOJ5R7J2QP0M8QANIN',
    'client_secret' => '050085f1003ce7e72e84a801c23dab93b8010846a9',
    'grant_type' => 'refresh_token',
    'redirect_uri' => ''
]);


// Establecer los datos POST
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Ejecutar la solicitud y obtener la respuesta
$response = curl_exec($ch);


// Verificar errores
if(curl_errno($ch)) echo "Error el realizar la solicitud: " . curl_errno($ch);

// Mostrar la respuesta
print_r($response);

// Cerrar la sesión
curl_close($ch);



?>