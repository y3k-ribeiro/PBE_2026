<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1 - Atividade 4</title>
</head>
<body>
    <h1>Calcular IMC</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome</label>
        <br>
        <input type="text" name="nome">
        <br><br>

        <label for="">Peso em kg:</label>
        <br>
        <input type="number" name="peso_kg" step="0.01">
        <br><br>
        
         <label for="">Altura em metros:</label>
        <br>
        <input type="number" name="altura" step="0.01">
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    
</body>
</html>