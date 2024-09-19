<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="form-container">
        <h2>Cadastro de Cliente</h2>
        <form action="cadastrar.php" method="post"> <!-- O formulário envia os dados para 'cadastrar.php' usando o método POST -->
            <input type="text" name="nome" placeholder="Nome" required> <!-- Campo para o nome, obrigatório -->
            <input type="email" name="email" placeholder="E-mail" required> <!-- Campo para o e-mail, obrigatório e verifica formato de e-mail -->
            <input type="tel" name="telefone" placeholder="Telefone" required> <!-- Campo para o telefone, obrigatório -->
            <input type="submit" value="Cadastrar"> <!-- Botão para enviar o formulário -->
        </form>
    </div>
</body>

</html>

