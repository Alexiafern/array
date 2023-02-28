<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 2</title>
</head>
<body>
    <!-- Centralizar no css-->
    <div class="inicio">
        <h1>O que é concatenação no PHP?</h1>
    </div>
    <P>O operador de concatenação de strings é o ponto .</P>

    <P>Por exemplo:</P>

    <P>$ddd  = '34';</P>
    <P>$fone = '32105691';</P>

    <P>echo '(' . $ddd . ') ' . $fone;</P>
    <P>Esse exemplo funciona igual com aspas duplas:</P>

    <P>echo "(" . $ddd . ") " . $fone;</P>
    <P>É assim que você concatena strings em PHP.</P>
    <!--Centralizar-->
    <div class="inicio">
        <h2>Exemplos de concatenação em PHP:</h2>
    </div>
    <h3>1ª Forma: Utilização do ponto ( . )</h3>
        <p>1. Esta talvez seja a forma mais utilizada em PHP. Veja o exemplo abaixo onde utilizamos o ponto como operador de concatenação para unir strings e variáveis.</p>

        <p>1. Observe que podemos utilizar elementos HTML como strings. Desta forma, através do comando echo, retornamos o elementos HTML de forma funcional.</p>

        <p>$nome = "Angelo";</p>
        <p>$sobrenome = "Ferreira";</p>
        <p>echo "<h2>Meu nome é: ".$nome." ".$sobrenome."</h2>";</p>

        <p>$end = "Rua São João";</p>
        <p>$n = 1129;</p>
        <p>$endCompleto = $end.", ".$n;</p>
        <p>echo "<h2>Endereço: ".$endCompleto."</h2>";</p>
    
</body>
</html>