<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface|Poppins">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" charset="utf-8"></script>
    <title>page d'acceuille</title>
</head>
<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1><i class="fa-brands fa-gripfire"></i>LofyGet</h1>
            </div>
            <ul class="items">
                <li><a href="stagiaire.php"><i class="fas fa-circle-plus"></i>stagiaire</a></li>
                <li><a href="Stage.php"><i class="fas fa-file-lines"></i>stage</a></li>
                <li><a href="impression.php"><i class="fas fa-print"></i>Impression</a></li>
                <button class="loginbtn" onclick="document.getElementById('login-form').style.display='block'" style="width:auto" title="compte personnel"><i class="fas fa-circle-user"></i></button>
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
            <div class="item"><a class="sub-btn"  href="#"><i class="fas fa-list-ul"></i>Stagiaire<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="stagiaire.php" class="sub-item"><i class="fas fa-circle-plus"></i>Ajouter Stagiaire</a>
                <a href="##" class="sub-item"><i class="fas fa-list-check"></i>Liste des Stagiaires</a>
                <a href="##" class="sub-item"><i class="fas fa-list-check"></i>Stagiaire en cours</a>
                    <a href="#" class="sub-item"><i class="fas fa-list-check"></i>Stagiaire en archive</a>
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
                    <a href="#" class="sub-item"><i class="fas fa-list-check"></i>Liste d'absences</a>
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
    <section>
        <div class="main">
            <h1><span>Persistence i</span>s the way<br>to success.</h1>
        </div>
    </section>

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

    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        function register()
        {
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login()
        {
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }
    </script>
    <script>
        var modal=document.getElementById("login-form");
        window.onclick=function(event)
        {
            if(even.target==modal)
            {
                modal.style.display="none";
            }
        }

        $(document).ready(function(){
            $("#closeForm").click(function(){
                $(".pwdOublie").hide();
            });

            $("#MDP").click(function(){
                $(".pwdOublie").show();
            });

            $(".closeBtn").click(function(){
                $("#login-form").hide();
            });
        });

    </script>
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
</body>
</html>
