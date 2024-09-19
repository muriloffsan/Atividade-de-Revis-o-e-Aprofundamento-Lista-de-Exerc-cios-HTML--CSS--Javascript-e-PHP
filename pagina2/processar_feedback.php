<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Recebido</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom, #004d00, #66ff66); 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .feedback-container {
            background: #e0e0e0; 
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            padding: 20px;
            width: 320px;
            text-align: center;
        }
        .feedback-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .feedback-container p {
            font-size: 18px;
            margin-bottom: 10px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="feedback-container">
        <h1>Avaliação Recebida!</h1>
        <p><strong>Produto:</strong> Calça</p>
        <p><strong>Nota:</strong> <?php echo htmlspecialchars($_POST['nota']); ?> de 5</p>
        <p><strong>Comentário:</strong> <?php echo htmlspecialchars($_POST['comentario']); ?></p>
    </div>
</body>
</html>
