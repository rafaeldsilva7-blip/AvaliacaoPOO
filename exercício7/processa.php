<?php
require_once "produto.php";

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

// Validação de dados
if(!$nome || !$preco || !$quantidade){
    exit("Dados incompletos!");
}
// Objeto da classe produto
$produto1 = new Produto((string) $nome,(float) $preco,(int) $quantidade);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Cadastrado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="pagina">
    <header class="cabecalho">
        <h1>Produto Cadastrado</h1>
    </header>
    
    <main class="resultado">
        <table>
            <thead>
                <tr>
                    <th>Infomações</th>
                    <th>Valor</th>
                </tr>
            </thead>

            <tbody>
                <!-- Nome -->
                <tr>
                    <td>Nome</td>
                    <td><?=$produto1->getNome()?></td>
                </tr>
                    <!-- Preço -->
                <tr>
                    <td>Preço</td>
                    <td>R$ <?= number_format($produto1->getPreco(), 2, ",", ".")?></td>
                </tr>
                    <!-- Quantidade -->
                <tr>
                    <td>Quantidade</td>
                    <td><?=$produto1->getQuantidade()?></td>
                </tr>

                <tr>
                    <td>Valor Final</td>
                    <td>R$ <?= number_format($produto1->calcularTotal(), 2, ",", ".")?></td>
                </tr>
            </tbody>
        </table>

        <a href="index.php">Voltar para o cadastro</a>
    </main>
</body>
</html>