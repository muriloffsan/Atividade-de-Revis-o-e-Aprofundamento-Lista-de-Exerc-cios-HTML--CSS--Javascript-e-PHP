<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação do Produto</title>
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
        .form-container {
            background: #e0e0e0; 
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            padding: 20px;
            width: 320px;
            text-align: center;
        }
        .form-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .form-container img {
            max-width: 80%;
            height: auto;
            margin-bottom: 20px;
        }
        .form-container input[type="number"], 
        .form-container textarea {
            width: calc(100% - 24px);
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 6px;
        }
        .form-container input[type="submit"] {
            background: #0072ff;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }
        .form-container input[type="submit"]:hover {
            background: #005bb5;
        }
    </style>
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
