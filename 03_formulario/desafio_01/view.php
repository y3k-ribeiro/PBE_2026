<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio</title>
</head>
<body>
    <h1>Calculadora de Salário Líquido</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome do funcionário:</label>
        <br><br>
        <input type="name" name="nome">
        <br><br>

        <label for="">Salário Bruto:</label>
        <br><br>
        <input type="number" name="salario_bruto">
        <br><br>

        <label for="">Horas Extras:</label>
        <br><br>
        <input type="number" name="horas_extras">
        <br><br>
        
        <label for="">Benefícios:</label>
        <br><br>
        <input type="number" name="beneficios">
        <br><br>

        <label for="">Descontos:</label>
        <br><br>
        <input type="number" name="descontos">
        <br><br>

        <br><br> 

        <button type="submit">Calcular Salário</button>
        
    </form>
    
</body>
</html>