<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Primeiro Projeto PHP</title>
    </head>
    <body>
        <h1>Realizando Operações em PHP </h1>
        <?php
        //Variaveis 

        $soma;
        $subtracao;
        $multiplicacao;
        $divisao;
        $media;
        $resto_divisao;

        $valor1 = 10;
        $valor2 = 3;

        //Realizando Operações

        echo" <span style='color:red;'><b>Realizando soma</b> <br></span>";
        $soma = $valor1 + $valor2;
        echo"<span style='color:blue;'>O valor da soma dos valores:</span>$valor1 e $valor2 é = $soma<br>";

        echo"<span style='color:red;'><strong>Realizando subtração</strong><br></span>";
        $subtracao = $valor1 - $valor2;
        echo" <span style= 'color:blue;'>O valor da subtracao dos valores :</span> $valor1 e $valor2 é = $subtracao<br>";
        
        echo"<span style='color:red;'><strong>Realizando a multipliçao</strong><br></span>";
        $multiplicacao = $valor1 * $valor2;
        echo"<span style='color:blue;'> O valor da multiplição dos valores:</span>$valor1 e $valor2 é =$multiplicacao <br>";
        
        echo"<span style = 'color:red;'><b>Realizando a divisão</b> <br></span>";
        $divisao = $valor1 / $valor2;
        echo "<span style='color:blue;'>O valor da divisão dos valores:</span>$valor1 e $valor2 é = $divisao<br>";
        
        echo"<span style='color:red;'><strong>Realizando a Media</strong> <br></span>";
        $media = ($valor1 + $valor2 / 2);
        echo"<span style='color:blue;'>O  valor da media dos valores:</span>$valor1 e $valor2 é = $media<br>";
        
        echo"<span style= 'color:red;'><b>Realizando o resto da divisão</b><br></span>";
        $resto_divisao = ($valor1%$valor2)."\n";
        echo" <span style='color:blue;'>O valor do resto da divisão dos valores:</span> $valor1 e $valor2 é =$resto_divisao<br>";
        echo" i am my friend?";
        
     
        
        
        ?>
    </body>
</html>
