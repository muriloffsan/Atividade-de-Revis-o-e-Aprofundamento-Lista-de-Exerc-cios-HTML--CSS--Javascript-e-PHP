<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Realizado</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .confirmation-container {
            background: #fff;
            border-radius: 12px;
            border: 2px solid #0072ff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            padding: 30px;
            width: 320px;
            text-align: center;
            animation: fadeIn 0.5s ease-out;
        }
        .confirmation-container h2 {
            margin-bottom: 20px;
            font-size: 26px;
            color: #333;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            border-bottom: 2px solid #0072ff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .confirmation-container ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .confirmation-container li {
            margin: 15px 0;
            font-size: 18px;
            color: #555;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            transition: background-color 0.3s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .logout-button {
            position: fixed;
            top: 40px;
            right: 40px;
            background-color: #ff5722;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .logout-button:hover {
            background-color: #e64a19;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <a href="../index.php" class="logout-button">Sair</a>
    <div class="confirmation-container">
        <h2>Cadastro Realizado com Sucesso!</h2>
        <ul>
            <li><strong>Nome:</strong> <?php echo htmlspecialchars($_POST['nome']); ?></li>
            <li><strong>E-mail:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>
            <li><strong>Telefone:</strong> <?php echo htmlspecialchars($_POST['telefone']); ?></li>
        </ul>
    </div>
</body>
</html>
