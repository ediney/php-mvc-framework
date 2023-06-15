<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        label, input { display: block; }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Usuário</legend>

        <form action="/users/save" method="post">

            <label for="fullname">Name</label>
            <input type="text" id="fullname">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">

            <label for="username">Username</label>
            <input type="text" id="username">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <button type="submit">Save</button>
        </form>
    </fieldset>
</body>
</html>