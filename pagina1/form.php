<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            padding: 20px;
            width: 320px;
            animation: slideIn 0.5s ease-out;
            text-align: center;
        }
        .form-container h2 {
            margin-bottom: 20px;
            font-size: 26px;
            color: #333;
        }
        .form-container input {
            width: calc(100% - 22px);
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 6px;
            transition: border-color 0.3s ease;
        }
        .form-container input:focus {
            border-color: #ff7e5f;
            outline: none;
        }
        .form-container input[type="submit"] {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            color: white;
            border: none;
            cursor: pointer;
            font-size: 19px;
            padding: 12px;
            transition: background 0.3s ease;
        }
        .form-container input[type="submit"]:hover {
            background: linear-gradient(to right, #feb47b, #ff7e5f);
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Cadastro de Cliente</h2>
        <form action="cadastrar.php" method="post">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="tel" name="telefone" placeholder="Telefone" required>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>

