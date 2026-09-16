<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1 - Atividade 4</title>
</head>
<body>
    <h1>Calculadora Média do Aluno</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome</label>
        <br>
        <input type="text" name="nome">
        <br><br>

        <label for="">Nota 1:</label>
        <br>
        <input type="number" name="nota1" step="0.01">
        <br><br>
        
         <label for="">Nota 2:</label>
        <br>
        <input type="number" name="nota2" step="0.01">
        <br><br>

         <label for="">Nota 3:</label>
        <br>
        <input type="number" name="nota3" step="0.01">

        <br><br> 
        <button type="submit">Calcular Média</button>
    </form>
    
</body>
</html>