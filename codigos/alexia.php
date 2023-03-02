<?php
    include "menu.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Pergunta 2</title>
</head>
<body><main>
            <h1>O que é concatenação no PHP?</h1>
            <br>
            <img src="../imgs/concatenação.jpg" alt="">
    
        <P>O operador de concatenação de strings é o ponto .</P>
    
        <P>Por exemplo:</P>
    
        <P>$ddd  = '34';</P>
        <P>$fone = '32105691';</P>
    
        <P>echo '(' . $ddd . ') ' . $fone;</P>
        <P>Esse exemplo funciona igual com aspas duplas:</P>
    
        <P>echo "(" . $ddd . ") " . $fone;</P>
        <P>É assim que você concatena strings em PHP.</P>
            <h2>Exemplos de concatenação em PHP:</h2>
            <br>
            <img src="../imgs/php.jpg" alt="">
            <br>

            <h3>1ª Forma: Utilização do ponto ( . )</h3>
        
            <p>1. Esta talvez seja a forma mais utilizada em PHP. Veja o exemplo abaixo onde utilizamos o ponto como operador de concatenação para unir strings e variáveis.</p>
    
            <p>1. Observe que podemos utilizar elementos HTML como strings. Desta forma, através do comando echo, retornamos o elementos HTML de forma funcional.</p>
    
            <p>$nome = "Angelo";</p>
            <p>$sobrenome = "Ferreira";</p>
            <p>echo &lt;h2&gt;Meu nome é: ".$nome." ".$sobrenome.";&lt;/h2&gt;"</p>
    
            <p>$end = "Rua São João";</p>
            <p>$n = 1129;</p>
            <p>$endCompleto = $end.", ".$n;</p>
            <p>echo &lt;h2&gt;Endereço: ".$endCompleto.";&lt;/h2&gt;</p>
</main>  
</body>
</html>