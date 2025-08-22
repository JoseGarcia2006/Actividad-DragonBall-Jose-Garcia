<?php
$usuarios = [
    "goku" => "kamehameha123",
    "vegeta" => "principe123",
    "gohan" => "mystic123",
    "piccolo" => "namek123",
    "krillin" => "destructo123",
    "yamcha" => "lobo123"
];

foreach ($usuarios as $user => $pass) {
    $hash = password_hash($pass, PASSWORD_BCRYPT);
    echo "Usuario: $user\n";
    echo "Contraseña: $pass\n";
    echo "Hash bcrypt: $hash\n\n";
}
?>