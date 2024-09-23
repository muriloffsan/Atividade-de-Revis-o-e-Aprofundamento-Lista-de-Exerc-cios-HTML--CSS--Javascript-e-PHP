<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Reunião</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Agendamento:</h1>
        <form action="processarReserva.php" method="post">
            <label for="nome">Insira seu nome:</label>
            <input type="text" id="id-nome" name="nome" required>

            <label for="date">Insira a data:</label>
            <input type="date" id="id-data" name="data">

            <label for="time">Insira o horário:</label>
            <input type="time" id="id-hora" name="hora">

            <button type="submit">Agendar</button>
        </form>
    </div>
</body>
</html>
