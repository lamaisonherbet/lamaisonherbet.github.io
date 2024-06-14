<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="prisederendezvous.css">
    <title>Maison Herbet</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   
</head>
<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="Logo finale.png" alt="logo"> Maison Herbet</a>
        </div>
        <div class="menu-container">
            <ul class="menu" id="menu">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="granits.php">Granits et Monuments</a></li>
                <li class="dropdown">
                    <a href="services.php">Services</a></li>
                <li><a href="Information1.php">Informations</a></li>
                <li><a href="prisederendezvous.php">Rendez-vous</a></li>
            </ul>
            <div class="search-bar">
                <input type="text" id="searchInput" placeholder="Rechercher par type de monument ou couleur..." onkeyup="filterMonuments()">
                <button><ion-icon name="search-outline"></ion-icon></button>
            </div>
        </div>
        <div class="toggle">
            <a href="#" id="toggleButton"><span color="orange"><ion-icon name="menu-sharp"></span></ion-icon></a>
        </div>
    </nav>

    <div class="center-content">
        <h1>Prendre un Rendez-vous</h1>
        <div class="form-container">
            <?php include 'PRISEDERENDEZVOUS.php'; ?>
            <form action="prisederendezvous.php" method="POST">
                <input type="text" name="name" placeholder="Votre nom" required>
                <input type="email" name="email" placeholder="Votre email" required>
                <input type="tel" name="phone" placeholder="Votre téléphone" required>
                <textarea name="message" placeholder="Votre message" required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>
    ?>
    <script>
        document.getElementById('toggleButton').addEventListener('click', function(e) {
            e.preventDefault();
            var menu = document.getElementById('menu');
            if (menu.classList.contains('active')) {
                menu.classList.remove('active');
                document.body.style.backgroundColor = ''; 
            } else {
                menu.classList.add('active');
                document.body.style.backgroundColor = 'white'; 
            }
        });
    </script>
</body>
</html>

    