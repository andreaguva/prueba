<?php

    //Open SSL
    //La ckase a encriptar:
    $frase = "mensaje php";
    echo "La frase original es: ".$frase;

    //Protocolo de cifrado
    $cifrado="AES-128-CTR";

    //Usar OpenSSL
    $iv_lomgitud=openssl_cipher_iv_length($cifrado);
    $options =0;

    //Inicializar Vector para encript
    $encryption_iv= "1234567891011121";
    //Guardar nuestra llave de encription
    $encryption_key= "AdSi";

    //Encriptar:

    $encriptado = openssl_encrypt($frase, $cifrado, $encryption_key,
    $options,$encryption_iv);
    echo "<br>".$encriptado;
    
    //desencriptar
    $descryption_iv = $encryption_iv;
    $descryption_key = $encryption_key;

    $desencriptado = openssl_decrypt($encriptado, $cifrado, $descryption_key,
    $options, $descryption_iv);
    echo "<br> Mensaje decodificado: ".$desencriptado;
    echo "<br>";

    //Limpieza de caracteres
    $frase2 = '<a href="script.js">Enlace para el hack</a>';
    echo htmlspecialchars($frase2);
?>