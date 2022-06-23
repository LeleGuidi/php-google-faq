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
        <div class="header_bottom"></div>
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

    </footer>
</body>
</html>