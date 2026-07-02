<?php
    require("connect_db.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zielona Pracownia &#169;</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alan+Sans:wght@300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header>
        <h1>Zielona Pracownia</h1>
    </header>
    <main>

    <section class = "Form LogInSignInForm">
            <fieldset>
                <form action="LogIn.php" method="post">
                    <label for="email">E-mail:</label>
                    <br/>
                    <input type="email" name="email" required>
                    <br/><br/>

                    <label for="password">Password:</label>
                    <br/>
                    <input type="password" name="password" required>
                    <br/><br/>

                    <button type="submit" class = "SumbitBtn">Zaloguj się</button>
                    <a href = "SignIn.php">Nie masz konta? Zarejstruj się!</a>
                </form>
            </fieldset>
    </main>
    <footer>
        <p>Zielona Pracownia &#169;</p>
        <div class="socials">

            <a href="#" class="social-btn">
            <i class="fa-brands fa-facebook-f"></i>
            </a>

            <a href="#" class="social-btn">
            <i class="fa-brands fa-instagram"></i>
            </a>

            <a href="#" class="social-btn">
            <i class="fa-brands fa-x-twitter"></i>
            </a>

        </div>
    </footer>
</body>
</html>