<?php

// Iniciar curl
$ch = curl_init();

// Url
$api_url = "https://desk.zoho.com/api/v1/tickets";

// Configurar las opciones del curl
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);

// Definir los headers
$headers = [
    ''
];


?>
