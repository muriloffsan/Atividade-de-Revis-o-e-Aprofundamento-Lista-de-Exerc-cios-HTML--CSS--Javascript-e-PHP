<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Recebido</title>
    <link rel="stylesheet" href="style_processar.css">
</head>
<body>
    <a href="../index.php" class="logout-button">Sair</a>

    <div class="feedback-container">
        <h1>Avaliação Recebida!</h1>
        <p><strong>Produto:</strong> Calça</p>
        <p><strong>Nota:</strong> <?php echo htmlspecialchars($_POST['nota']); ?> de 5</p>
        <p><strong>Comentário:</strong> <?php echo htmlspecialchars($_POST['comentario']); ?></p>
    </div>
</body>
</html>
