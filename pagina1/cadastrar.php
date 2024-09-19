<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Realizado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="../index.php" class="logout-button">Sair</a> <!-- Link para a página principal (pode ser usado para sair) -->
    <div class="confirmation-container">
        <h2>Cadastro Realizado com Sucesso!</h2>
        <ul>
            <li><strong>Nome:</strong> 
                <?php 
                    echo htmlspecialchars($_POST['nome']); 
                    /* Exibe o nome enviado no formulário. 
                    htmlspecialchars() protege contra injeções de código malicioso (XSS) */
                ?>
            </li>
            <li><strong>E-mail:</strong> 
                <?php 
                    echo htmlspecialchars($_POST['email']); 
                    /* Exibe o e-mail enviado no formulário, também protegido com htmlspecialchars() */
                ?>
            </li>
            <li><strong>Telefone:</strong> 
                <?php 
                    echo htmlspecialchars($_POST['telefone']); 
                    /* Exibe o telefone enviado no formulário, com proteção contra XSS */
                ?>
            </li>
        </ul>
    </div>
</body>

</html>
