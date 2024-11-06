<?php

// Iniciar curl
$ch = curl_init();

// Url
$api_url = "https://desk.zoho.com/api/v1/tickets";

// Token de acceso 
$token = "1000.a7ae43d7cd94dbcdb389cb9b53443d77.ca15a5df9e9490975008bb2effd46a30";

// Configurar las opciones del curl
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);

// Definir los headers
$headers = [
    'Content-Type: application/json',
    'orgId: 689207033',
    'Authorization: Zoho-oauthtoken ' . $token
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$data = json_encode([
    'departmentId' => '394561000000006907',
    'contact' => [
        'firstName' => 'Santiago',
        'lastName' => 'Prada'
    ],
    'resolution' => 'auxsistemasbmanga@unidrogas.net.co',
    'phone' => '3213334791',
    'email' => 'spradanino0@gmail.com',
    'subject' => 'Alemana 01 - Giros Ya',
    'status' => 'Abierto'
]);

// Establecer los datos a la peticion
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Ejecutar la peticion
$response = curl_exec($ch);

// Verificar errores
if (curl_errno($ch))
    echo "Ocurrió un error: " . curl_errno($ch);

// Mostrar la respuesta
print_r($response);

// Cerrar la sesión
curl_close($ch);


?>