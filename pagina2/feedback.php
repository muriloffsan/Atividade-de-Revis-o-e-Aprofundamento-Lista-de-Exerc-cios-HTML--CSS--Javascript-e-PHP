<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação do Produto</title>
    <link rel="stylesheet" href="style_feedback.css">
</head>
<body>
    <div class="form-container">
        <h1>Avalie o Produto: Calça</h1>
        <img src="calca_feedback.jpeg" alt="Calça">
        <form action="processar_feedback.php" method="post">
            <label for="nota">Nota (de 1 a 5):</label>
            <input type="number" id="nota" name="nota" min="1" max="5" required>

            <label for="comentario">Comentário:</label>
            <textarea id="comentario" name="comentario" rows="4" placeholder="Escreva seu comentário" required></textarea>

            <input type="submit" value="Enviar Avaliação">
        </form>
    </div>
</body>
</html>
