<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-sacale=1">
        <title>Cliente</title>
    </head>
    <body>
        <form action="/cadastrar-cliente" method="POST">
            @csrf
            <label for="lblnome">Nome:</label>
            <input type="text" name="nome">
            <br><br>
            <label for="lblemail">E-mail:</label>
            <input type="text" name="email">
            <br><br>
            <button>Cadastrar</button>
        </form>
    </body>
</html>