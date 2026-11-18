<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <form action="processa.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" required>

        <br>

        <input type="radio" id="pix" name="pagamento" value="pix">
        <label for="pix">Pix</label>

        <input type="radio" id="cartao" name="pagamento" value="cartao">
        <label for="cartao">Cartão de Crédito</label>

        <input type="radio" id="boleto"  name="pagamento" value="boleto">
        <label for="boleto">Boleto</label>

        <br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>