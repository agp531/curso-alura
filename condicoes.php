<?php

$idade = 16;
$numerodDePessoas = 0;
echo "Voce só pode entrar se for maior de 18 anos.";
echo "ou a partir de 16 anos acompanhado" . PHP_EOL;

if($idade >= 18){
    echo"Voce tem $idade anos, Acesso liberado!";
}else if($idade >=16 && $numerodDePessoas >= 1){
    echo"Voce tem $idade e esta acompanhado, Acesso liberado!";
}else{
    echo"Voce tem $idade, Acesso negado!";
}
    


