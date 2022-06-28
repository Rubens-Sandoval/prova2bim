<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-sacale=1">
        <title>Cliente</title>
    </head>
    <body>
        <h1>Clientes</h1>
        
        <label for="lblnome">Nome:</label>
        <input type="text" name="nome" value="{{ $cliente->nome }}">
        <br><br>
        <label for="lblemail">E-mail:</label>
        <input type="text" name="email" value="{{ $cliente->email }}">
        <br><br>
    </body>
</html>