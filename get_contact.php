<?php

function get_contact($token, $email)
{
    // Iniciar curl
    $ch = curl_init();

    // Url
    $api_url = "https://desk.zoho.com/api/v1/contacts/search?email=" . urldecode($email);

    // Configurar las opciones del curl
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Definir los headers
    $headers = [
        'Content-Type: application/json',
        'orgId: 689207033',
        'Authorization: Zoho-oauthtoken ' . $token
    ];

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Ejecutar la peticion
    $response = curl_exec($ch);

    // Verificar errores
    if (curl_errno($ch))
        echo "Ocurrió un error: " . curl_errno($ch);

    // Cerrar la sesión
    curl_close($ch);

    // Mostrar la respuesta
    return $response;

}
;


?>