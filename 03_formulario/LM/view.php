<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade - LM </title>
</head>
<body>
    <h2 style="color:purple",front-family:Comic Sans MS, cursive;>Inscrição em Evento</h2>
    <form action="logica.php" method="POST" style="background:#f3e5f5; padding: 15px; border-radius:8px; width:350px;">
        <label for="">Nome Completo</label>
        <br>
        <input type="text" name="nome">
        <br><br>
        
        <label for="tipo_ingresso">Tipo de Ingresso:</label><br>
		<select name="tipo_ingresso" id="tipo_ingresso" required>
		<option value="selecione"></option>
		<option value="estudante">Estudante</option>
		<option value="vip">VIP</option>
		<option value="open_bar">Open Bar</option>
		</select>
		<br><br>
        <label for="data">Data do Evento:</label><br>
		<input type="date" id="data" name="data" required>
		<br><br>

        <label for="hora">Hora de Chegada:</label><br>
		<input type="time" id="hora" name="hora" required>
		<br><br>
        <button style="background-color: purple; color:white; paading:5px 10px;"type="submit">Inscrever-se</button>
    </form>
    
</body>
</html>