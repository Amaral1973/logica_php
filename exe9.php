<html>
<head>
    <title>Exemplo de IF</title>
</head>
<body>
    <form action="exe9.php" method="POST">
        <label>1º Valor:</label><input type="text" name="val1" placeholder="Digite um número"><br><br>
        <label>2º Valor:</label><input type="text" name="val2" placeholder="Digite um número"><br><br>
        <input type="submit" value="Verificar">
    </form>
    <?php
        if(isset($_POST['val1']))
        {
            $val1 = $_POST['val1'];
            $val2 = $_POST['val2'];
            $soma = $val1 + $val2;
            if($soma > 20)
            {
                $resultado = $soma + 8;
                echo "A soma foi: $soma, com adição de 8 ficou: $resultado";
            }
            else
            {
                $resultado = $soma - 5;
                echo "A soma foi: $soma, com a subtração de 5 ficou: $resultado";
            }
        }
        else
        {
            $val1 = "";
            $val2 = "";
        }
    ?>
</body>
</html>