<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>login</h1>
        <!--metodo post é o mais usado por questoes de segurança-->
     <form action="cadastro.php" method="post"><!--criaçao de formularia e linkagem ao cadastro-->
        <p>
            <label>E-mail</label>
            <input type="email" name="e-mail">
        </p>
        <p>
            <label>Senha</label><!--titulo da caixa -->
            <input type="password" name="senha"><!--caixa de resposta' -->
        </p>
        <p>
            <label>Nome</label>
            <input type="text" name="Nome">
        </p>
        <p>
            <button>enviar</button>
        </p>
    </form>
</body>
</html>