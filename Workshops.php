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
    <nav>
        <ul>
            <li><a href = "index.html">Strona główna</a></li>
            <li><a href = "AboutUs.html">O nas</a></li>
            <li><a href = "Workshops.php">Warsztaty</a></li>
            <li><a href = "Shop.php">Sklep</a></li>
            <li><a href = "Gallery.html">Galeria</a></li>
            <li><a href = "Contact.php">Kontakt</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2><b>🌸 Warsztaty florystyczne</b></h2>
            <h3>O naszych warsztatach</h3>
            <p>Organizujemy warsztaty florystyczne dla wszystkich osób, które chcą poznać sztukę tworzenia kompozycji kwiatowych. Spotkania odbywają się w kameralnej atmosferze i są prowadzone przez doświadczonych florystów, którzy krok po kroku pokazują, jak pracować z różnymi gatunkami roślin oraz jak tworzyć estetyczne bukiety i dekoracje.<p>
            <br/>
            <br/>
            <h3>Jak wyglądają warsztaty?</h3>
            <p>Podczas warsztatów uczestnicy poznają podstawowe techniki florystyczne, zasady dobierania kolorów oraz sposoby komponowania bukietów. Każde spotkanie składa się z krótkiego wprowadzenia teoretycznego oraz części praktycznej, w której uczestnicy samodzielnie tworzą swoje kompozycje. Wszystkie materiały są zapewniane na miejscu, a wykonane prace można zabrać ze sobą do domu.</p>
            <br/>
            <br/>
        </section>
        <section id = "flashcards">
            <div class="cards">
                <h3>Podstawy florystyki</h3>
                <p>Warsztaty dla początkujących, podczas których uczestnicy poznają podstawowe techniki układania bukietów i pracy z kwiatami ciętymi.</p>
            </div>
            <div class="cards">
                <h3>Tworzenie bukietów okolicznościowych</h3>
                <p>Nauka komponowania bukietów na różne okazje, takie jak urodziny, rocznice czy podziękowania.</p>
            </div>
            <div class="cards">
                <h3>Florystyka ślubna</h3>
                <p>Warsztaty skupiające się na tworzeniu bukietów ślubnych, dekoracji stołów oraz kompozycji kwiatowych na uroczystości.</p>
            </div>
            <div class="cards">
                <h3>Kompozycje w pudełkach i flower boxy</h3>
                <p>Nauka tworzenia nowoczesnych kompozycji kwiatowych w ozdobnych pudełkach i koszach.</p>
            </div>
            <div class="cards">
                <h3>Sezonowe dekoracje kwiatowe</h3>
                <p>Warsztaty poświęcone tworzeniu dekoracji dopasowanych do aktualnej pory roku.</p>
            </div>
            <div class="cards">
                <h3>Florystyka stołowa i dekoracje wnętrz</h3>
                <p>Tworzenie kompozycji kwiatowych przeznaczonych do dekoracji stołów, restauracji i przestrzeni domowych.</p>
            </div>
            <div class="cards">
                <h3>Wieńce i dekoracje okolicznościowe</h3>
                <p>Warsztaty obejmujące tworzenie wieńców oraz ozdób na różne okazje.</p>
            </div>
            <div class="cards">
                <h3>Zaawansowane techniki florystyczne</h3>
                <p>Warsztaty dla osób, które mają już podstawową wiedzę i chcą rozwijać swoje umiejętności florystyczne.</p>
            </div>
            <br/>
            <br/>
        </section>
        <div class = "Anouncment Hidding" id = "Anouncment">
            <h3 id = "MainInfo">Lorem ipsum dolor sit</h3>
            <p id = "ErrorInfo">Jakiś tam error</p>
            <button class = "SumbitBtn" id = "OkBtn">OK</button>
        </div>
        <section class = "Form">
            <fieldset>
                <form action="WorkshopsForm.php" method="post">
                    <label for="firstname">Imię:</label>
                    <br/>
                    <input type="text" name="firstname" required>
                    <br/><br/>

                    <label for="surname">Nazwisko:</label>
                    <br/>
                    <input type="text" name="surname" required>
                    <br/><br/>

                    <label for="email">E-mail:</label>
                    <br/>
                    <input type="email" name="email" required>
                    <br/><br/>

                    <label for="people">Liczba osób</label>
                    <br/>
                    <select name="people" required>
                        <?php
                            $sql = "SELECT * FROM numberofpeople";
                            $result = $conn->query($sql);
                            if($result) 
                            {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="' . $row['id'] . '">' . $row['text'] . '</option>';
                                }
                            }

                            else
                                echo($conn->connect_error);
                        ?>
                    </select>
                    <br/><br/>

                    <label for="workshop">Wybrane warsztaty:</label>
                    <br/>
                    <select name="workshop" required>
                      <?php
                       $sql = "SELECT * FROM workshops";
                       $result = $conn->query($sql);
                       if($result) 
                       {
                           while($row = $result->fetch_assoc()) {
                               echo '<option value="' . $row['id'] . '">' . $row['typeOfWorkshops'] . '</option>';
                           }
                       }
                       else
                           echo($conn->connect_error);
                   ?>
                    </select>
                    <br/>
                    <br/>

                    <button type="submit" class = "SumbitBtn">Biorę udział!</button>
                </form>
            </fieldset>

        </section>
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
    <?php
if (isset($_GET['status'])) {
    $status = $_GET['status'];

    if ($status == "success") {
        echo "<script>window.onload = function() { Information('Formularz został poprawnie wysłany! Do zobaczenia! 👋'); };</script>";
    } elseif ($status == "missing") {
        echo "<script>window.onload = function() { Information('Formularz nie został przesłany - brak danych'); };</script>";
    } elseif ($status == "error") {
        $msg = $_GET['msg'] ?? 'Nieznany błąd';
        $msg = htmlspecialchars($msg, ENT_QUOTES);
        echo "<script>window.onload = function() { ErrorInfo('Formularz nie został przesłany - błąd 👇', '$msg'); };</script>";
    }
}
?>
<script src="Scripts.js"></script>
</body>
</html>