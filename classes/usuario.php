<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style_form.css" type="text/css" rel="stylesheet" media="screen">
    <title>Formulário de contato</title>
</head>
<body>

    <div class="central">

        <header class="h1">

            <h1>CADASTRAR</h1>

        </header>

        <form method="POST">

            <input type="text" name="nomec" size="30" maxlength="50" placeholder="Nome Completo">
            <br>

            <input type="email" name="email" size="30" maxlength="15" placeholder="Email:">
            <br>

            <input type="text" name="cnpj" size="30" maxlength="30" placeholder="Cnpj:">
            <br>

            <input type="text" name="cpf" size="30" maxlength="30" placeholder="Cpf:">
            <br>

            <input type="password" name="senha" size="30" maxlength="30" placeholder="Senha:">
            <br>

            <input type="password" name="confsenha" size="30" maxlength="30" placeholder="Confirmar senha:">
            <br><br>

            <input type="submit" value="Entrar" id ="enviar">

        </form>
    </div>






</body>
</html>