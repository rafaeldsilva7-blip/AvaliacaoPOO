<?php
require_once "Pagamento.php";

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$pagamento = $_POST["pagamento"];

// Validação de dados
if(!$nome || !$preco || !$pagamento){
    exit("Dados incompletos!");
}
// Objeto da classe produto
if ($pagamento == "pix"){
    $produto1 = new Pix((string) $nome,(float) $preco, (string)$pagamento);
}
elseif($pagamento == "cartao"){
    $produto1 = new Cartao((string) $nome,(float) $preco, (string)$pagamento);
}
else{
    $produto1 = new Boleto((string) $nome,(float) $preco, (string)$pagamento);
}

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
                    <!-- pagamento -->
                <tr>
                    <td>pagamento</td>
                    <td><?=$produto1->getpagamento()?></td>
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