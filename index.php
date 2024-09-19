<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Integrantes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #ff0000;
            padding: 15px 10px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            color: white;
            text-align: center;
            padding: 14px 25px;
            text-decoration: none;
            display: block;
            border-radius: 5px;
        }
        nav ul li a:hover {
            background-color: #575757;
        }
        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            margin: 50px auto;
            padding: 0 20px;
            max-width: 1400px;
        }
        .profile-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 30px;
            width: 300px;
            height: 400px;
        }
        .profile-card img {
            border-radius: 50%;
            width: 180px;
            height: 180px;
            object-fit: cover;
            border: 2px solid #000000;
            margin-bottom: 20px;
        }
        .profile-card h2 {
            font-size: 24px;
            color: #333;
            margin: 0;
        }
    </style>
</head>
<body>

    <nav>
        <ul>
            <li><a href="pagina1/form.php">Exercicio 1</a></li>
            <li><a href="pagina2/exercicio2.php">Exercicio 2</a></li>
            <li><a href="pagina3/exercicio3.php">Exercicio 3</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="profile-card">
            <img src="imagens/muriloFoto.JPG" alt="Foto de Murilo Ferreira Faria Santana">
            <h2>Murilo Ferreira Faria Santana</h2>
        </div>
        <div class="profile-card">
            <img src="imagens/samuelFoto.JPG" alt="Foto de Samuel Boaz de Morais Gonçalves">
            <h2>Samuel Boaz de Morais Gonçalves</h2>
        </div>
        <div class="profile-card">
            <img src="imagens/andreyFoto.png" alt="Foto de Andrey Montibeller de Toledo">
            <h2>ANDREY MONTIBELLER DE TOLEDO</h2>
        </div>
    </div>

</body>
</html>
