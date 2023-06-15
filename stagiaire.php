<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" charset="utf-8"></script>
    <title>Ajouter Stagaire</title>
</head>
<body>
    <div class="contenair">
        <header>
            <nav class="nav-bar">
                <div class="logo">
                <h1><i class="fa-brands fa-gripfire"></i>LofyGet</h1>
                </div>
                <ul class="items">
                    <button class="loginbtn" onclick="document.getElementById('login-form').style.display='block'" style="width:auto" title="compte personnel"><i class="fas fa-circle-user"></i>  </button>
                </ul>
            </nav>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </header>
        <div class="side-bar">
        <h1 class="logo-menu"><i class="fa-brands fa-gripfire"></i>LofyGet</h1>
        <div class="close-btn">
            <i class="fas fa-times"></i>
        </div>
        <div class="menu">
            <div class="item"><a href="index.php"><i class="fas fa-home"></i>Acceuille</a></div>
            <div class="item"><a class="sub-btn"  href="#"><i class="fas fa-list-ul"></i>Stagiaire<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="stagiaire.php" class="sub-item"><i class="fas fa-circle-plus"></i>Ajouter Stagiaire</a>
                <a href="##" class="sub-item"><i class="fas fa-list-check"></i>Liste des Stagiaires</a>
                <a href="##" class="sub-item"><i class="fas fa-list-check"></i>Stagiaire en cours</a>
                    <a href="" class="sub-item"><i class="fas fa-list-check"></i>Stagiaire en archive</a>
                </div>
            </div>
            <div class="item"><a class="sub-btn" href="#"><i class="fas fa-file"></i>Stage<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="stage.php" class="sub-item"><i class="fas fa-circle-plus"></i>Ajouter stage</a>
                <a href="##" class="sub-item"><i class="fas fa-list-check"></i>Liste des stages</a>
                </div>
            </div>
            <div class="item"><a class="sub-btn" href="#"><i class="fas fa-user-group"></i>Encadrant<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="encadrant.php" class="sub-item"><i class="fas fa-circle-plus"></i>Ajouter encadrant</a>
                <a href="##" class="sub-item"><i class="fas fa-list-check"></i>Liste d'encadrants</a>
                </div>
            </div>
            <div class="item"><a class="sub-btn" href="#"><i class="fas fa-file-lines"></i>Absence<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="absence.php" class="sub-item"><i class="fa-solid fa-pen-to-square"></i>Marquer absence</a>
                    <a href="#" class="sub-item"><i class="fas fa-list-check"></i>Liste d'absence</a>
                </div>
            </div>
            <div class="item"><a href="#"><i class="fas fa-envelope"></i>Envoyer email</a></div>
            <div class="item"><a class="sub-btn" href="#"><i class="fas fa-gear"></i>Gestion compte<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item"><i class="fas fa-user-gear"></i>Changer login</a>
                    <a href="#" class="sub-item"><i class="fas fa-lock"></i>Changer password</a>
                    <a href="#" class="sub-item"><i class="fas fa-envelope"></i>Changer email</a>
                </div>
            </div>
        </div>
        </div>
        <div class="stg-form">
        <form action="" class="main-form">
            <p class="form-bar"><button class="stg-btn"><i class="fas fa-circle-plus"></i>Ajouter stagiaire</button></p>
            <label for="cin">Cin:</label><input class="stg-input" id="cin" type="text" placeholder="Saisir CNI..." required><br>
            <label for="nom">Nom:</label><input class="stg-input" id="nom" type="text" placeholder=" Saisir Nom..." required><br>
            <label for="prenom">Prenom:</label><input class="stg-input" id="prenom" type="text" placeholder="Saisir Prénom..." required><br>
            <label for="email">Email:</label><input class="stg-input" id="email" type="email" placeholder="Saisir Email..." required><br>
            <label for="date">Date de Naissance:</label><input class="stg-input" id="date" type="date" placeholder="Saisir date de naissance..." required><br>
            <label for="tel">Téléphone:</label><input class="stg-input" id="tel" type="tel" placeholder="Saisir Numéro de téléphone..." required><br>
            <label for="cv">Cv:</label><input id="cv" type="file" required><br>
            <input type="submit" value="Ajouter">
            <input type="reset" value="annuler">
        </form>
        </div>
    <footer>
        <div class="footerbox">
            <div class="boxfoot">
                <h3>Nous contacter</h3>
                <i></i>
                <ul>
                    <li><i class="fa-solid fa-location-dot"><span>Adresse</span></i></li>
                    <li><i class="fa-solid fa-mobile"><span>+21653368498</span></i></li>
                    <li><i class="fa-solid fa-envelope"><span>azaelbivihou1@gmai.com</span></i></li>
                </ul>
            </div>
            <div class="boxfoot">
                <h3>Raccourcis Menu</h3>
                <i></i>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Stagiaire</a></li>
                    <li><a href="#">Stage</a></li>
                    <li><a href="#">Encadrant</a></li>
                    <li><a href="#">Absence</a></li>
                </ul>
            </div>
            <div class="boxfoot bfoot">
                <h3>Boite à lettre</h3>
                <i></i>
                <input type="email" name="email" placeholder="Entrer votre email"><br>
                <button>s'inscrire</button>
                <span><i class="fa-solid fa-comment"></i></span>
                <div class="socialLink">
                    <span><i class="fa-brands fa-facebook"></i></span>
                    <span><i class="fa-brands fa-linkedin"></i></span>
                    <span><i class="fa-brands fa-square-twitter"></i></span>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".sub-btn").click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });

            //fonction pour la reaparution de menu de gauche
            $(".menu-btn").click(function(){
                $('.side-bar').addClass('active');
                $('menu-btn').css("visibility", "hidden");
            });

            $(".close-btn").click(function(){
                $('.side-bar').removeClass('active');
                $('menu-btn').css("visibility", "visible");
            });
        });
        </script>
</body>
</html>