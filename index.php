<?php 
    include('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>FAQ</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6a19c75f45.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="header_top">
            <div class="logo_and_title">
                <img src="img/logogoogle.png" alt="Logo Google">
                <h1>Privacy e termini</h1>
            </div>
            <div class="user_and_settings">
                <i class="fa-solid fa-bars"></i>
                <i class="fa-solid fa-circle-user"></i>
            </div>
        </div>
        <div class="header_bottom">
            <ul class="navbar">
                <li>
                    <a href="#/">Introduzione</a>
                </li>
                <li>
                    <a href="#/">Norme sulla privacy</a>
                </li>
                <li>
                    <a href="#/">Termini di servizio</a>
                </li>
                <li>
                    <a href="#/">Tecnologie</a>
                </li>
                <li>
                    <a class="active" href="#/">Domande frequenti</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <?php foreach($faqs as $faq) {
                echo $faq['domanda'];
                echo $faq['risposta'];
            } ?>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="links">
                    <a href="#/">Google</a>
                    <i class="fa-solid fa-circle"></i>
                    <a href="#/">Tutto su Google</a>
                    <i class="fa-solid fa-circle"></i>
                    <a href="#/">Privacy</a>
                    <i class="fa-solid fa-circle"></i>
                    <a href="#/">Termini</a>
                </div>
                <div class="language">
                <i class="fa-solid fa-earth-europe"></i>
                <select name="language">
                    <option value="italia">Italia</option>
                    <option value="inglese">Inglese</option>
                </select>
                </div>
            </div>
        </div>  
    </footer>
</body>
</html>