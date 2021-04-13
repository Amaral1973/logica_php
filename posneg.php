<html>
<head>
    <title>Positivo - Negativo</title>
</head>
<body>
<form action="posneg.php" method="post">
    <label>Digitar um número:</label> <input type="text" name="num1" placeholder="Número de 0 a 100"><br><br>
    <input type="submit" value="Verificar">
</form>
<?php
    if(isset($_POST['num1']))
    {
        $val1 = $_POST['num1'];
        if($val1 < 0)
        {
            echo 'Número negativo!';
        }
        else
        {
            echo 'Número positivo!';
        }
    }
    else
    {
        $val1 = "";
    }
?>
</body>
</html>