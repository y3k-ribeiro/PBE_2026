<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1 - Atividade 4</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>
    <h2>Dados do Cliente</h2>
    <form action="logica.php" method="POST">
        <label for="">Nome</label>
        <br>
        <input type="text" name="nome_cliente">
        <br><br>

        <h2>Produto 1</h2>

        <label for="">Nome do produto :</label>
        <br>
        <input type="text" name="produto1" >
        <br><br>
        
         <label for="">Preço:</label>
        <br>
        <input type="number" name="preco1" step="0.01">
        <br><br>

         <label for="">Quantidade:</label>
        <br>
        <input type="number" name="quantidade1" step="0.01">
        <br><br>

        <h2>Produto 2</h2>

        <label for="">Nome do produto:</label>
        <br>
        <input type="text" name="produto2" >
        <br><br>
        
         <label for="">Preço:</label>
        <br>
        <input type="number" name="preco2" step="0.01">
        <br><br>

         <label for="">Quantidade:</label>
        <br>
        <input type="number" name="quantidade2" step="0.01">
        <br><br>

        <h2>Produto 3</h2>

        <label for="">Nome do produto:</label>
        <br>
        <input type="text" name="produto3" >
        <br><br>
        
         <label for="">Preço:</label>
        <br>
        <input type="number" name="preco3" step="0.01">
        <br><br>

         <label for="">Quantidade:</label>
        <br>
        <input type="number" name="quantidade3" step="0.01">
        <br><br>
        <button type="submit">Finalizar Compra</button>
    </form>
    
</body>
</html>