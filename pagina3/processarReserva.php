<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação do Agendamento</title>
    <link rel="stylesheet" href="processar.css">
</head>
<body>
    <a href="../index.php" class="logout-button">Sair</a>
    <div class="confirmation-container">
        <h2>Agendamento realizado!</h2>
        <ul>
            <!-- Usando 'htmlspecialchars' para proteger contra injeção de código -->
            <li><strong>Nome:</strong> <?php echo htmlspecialchars($_POST['nome']); ?></li>
            <li><strong>Data:</strong> <?php echo htmlspecialchars($_POST['data']); ?></li>
            <li><strong>Hora:</strong> <?php echo htmlspecialchars($_POST['hora']); ?></li>
        </ul>
    </div>
</body>
</html>
