<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/login.css">

</head>
<body>

    <main>

        <h1>
            Login
        </h1>
        
        <div class="social-media">

            <a href="#">
                <img src="img/google.png" alt="Google">
            </a>

            <a href="#">
                <img src="img/facebook.png" alt="facebook">
            </a>

            <a href="#">
                <img src="img/linkedin.png" alt="linkedin ">
            </a>
        </div>

        <div class="alternative">
            <span>
                OR
            </span>
        </div>

        <form action="testlogin.php" method="POST">
            <label for="name">
                <span>
                    Name
                </span>
                <input type="text" id="nome" name="nome">
            </label>

            <label for="email">
                <span>
                    Email
                </span>
                <input type="email" id="email" name="email">
            </label>

            <label for="password">
                <span>
                    Password
                </span>
                <input type="password" id="senha" name="senha">
            </label>

            <input type="submit" value="Enviar" id="submit" name="submit">

        </form>

    </main>
    <section class="imagens">
        <img src="img/logoo.png" alt="Logo">
        <div class="cricle"></div>
    </section>
    
</body>
</html>