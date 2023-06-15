<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


include 'config.php';
$msg="";

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $passwordConf = mysqli_real_escape_string($conn, md5($_POST['passwordConf']));
    $code = mysqli_real_escape_string($conn, md5(rand()));
    
    if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users WHERE email = '{$email}'")) >0){

        $msg= "<div class ='alert alert-danger'> ce email existe a deja un compte.</div>";

    } else {
        if($password===$passwordConf){
            $sql = "INSERT INTO users( name, email, password, code) VALUE('{$name}',  '{$email}', '{$password}', '{$code}')";

            $result= mysqli_query($conn, $sql);

            if($result){
                echo "<div style= display:'none';>";
                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
                    //Enable verbose debug output
                    $mail->isSMTP();                                            
                    //Send using SMTP
                    $mail->Host       = 'smtp.example.com';                     
                    //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   
                    //Enable SMTP authentication
                    $mail->Username   = 'azaelbivihou1@gmail.com';                     
                    //SMTP username
                    $mail->Password   = '<azael/>bivihou>';                               
                    //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
                    //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    
                     //TCP port to connect to; use 587 if you have set 
                    //`SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('azaelbivihou1@gmail.com');
                    $mail->addAddress($email);     //Add a recipient

                    //Content
                    $mail->isHTML(true);            //Set email format to HTML
                    $mail->Subject = 'no reply';
                    $mail->Body = 'voici votre code de verification <b><a href="http://localhost:3000/page/?verification='.$code.'">http://localhost:3000/page/?verification='.$code.'</a></b>';


                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                echo "<div/>";

                $msg= "<div class='alert alert-info'>code deverification envoyé dans votre adresse email.</div>";
                header("Location:index.php");
            }else{
                $msg="<div class='alert alert-danger'> Oop une erreur s'est produite.</div>";

            }

        }else{
        $msg="<div class='alert alert-danger'> mot de passe incorrect!</div>";
        }
    }

}


?>

<?php
    include 'config.php';
    $msg="";


    if(isset($_GET['verification'])){
        if(mysqli_num_rows(mysqli_query($conn, "SELECT*FROM users WHERE code='{$_GET['verification']}'"))>0){
            $query = mysqli_query($conn,"UPDATE users SET code='' WHERE code='{$_GET['verification']}'");
            if($query){
                $msg= "<div class='alert-success'> mot de passe verifié avec succes</div>";
            }
        }
    }

    if(isset($_POST['connect'])){
        $username=mysqli_real_escape_string($conn, $_POST['username']);
        $password=mysqli_real_escape_string($conn, md5($_POST['password']));

        $sql= "SELECT * FROM users WHERE name = '{$username}' AND password= '{$password}'";

        $result=mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)===1){
            $row= mysqli_fetch_assoc($result);
            header("Location:index.php");

            if(!empty($row['code'])){
                $_SESSION['SESSION_EMAIL']=$email;
            }
            else{
                $msg= "<div class= 'alert alert_info'>Vérifiez votre compte puis ressayer.</div>";
            }
        }else{
            // $msg="<div class='alert alert-danger' style='color:red; font-size:18px; text-align:center';>Login ou Mot de passe incorrect.</div>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="page.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" charset="utf-8"></script>
    <title>Connexion</title>
</head>
<body>
    <div class="boxe1">
        <div class="boxe2">
            <p><i class="fa-brands fa-gripfire"></i></p>
            <h2>Persistence</h2>
            <h2>is the way to success.</h2>
            <span></span>
            <img src="photo1.jpg" alt="">
            <div class="pwdOublie">
                <form action="">
                    <p>Mot de passe oublié ?</p><i id="closeForm" class="fas fa-times"></i>
                    <span></span>
                    <div class="inputBox">
                        <input type="email" name="email" class="input-f" required>
                        <h3>Saisir email</h3>
                    <i></i>
                    </div>
                    <button type="submit" name="submit" class="submit-btn">Recuperer</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="boxes box5"></div>
    <div class="box">
        <span class="ligneBordure"></span>
        
        <div id="login-form" class="sect-form">
            <div class="form-box">
                <div class="btn-box">
                    <div id="btn"></div>
                    <button type="button"onclick="login()" class="login-btn">Connexion</button>
                    <button type="button" onclick="register()" class="login-btn">S'inscrire</button>
                </div>
                <?php echo $msg; ?>
                <form action="" class="input-login" id="login" method="POST">
                    <div class="inputBox">
                        <input type="text" name="username" class="input-f" required>
                        <span>Saisir login</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="password" class="input-f" required>
                        <span>Saisir mot de passe</span>
                        <i></i>
                    </div>

                    <input id="ch-bx" type="checkbox" name="checkbox" class="check-box"><label for="ch-bx" class="lb-box">M'ensouvenir du mot du passe.</label><br>
                    <p id="MDP">Mot de passe oublié?</p>
                    <button type="submit" name="connect" class="submit-btn">Connexion</button>
                </form>
                <form action="" id="register" class="input-register" method="POST">
                    <div class="inputBox">
                        <input type="text"  name="username" class="input-f" required>
                        <span>Saisir nom et prénom</span>
                        <i></i>
                    </div>

                    <div class="inputBox">
                        <input type="email" name="email" class="input-f" required>
                        <span>Saisir email</span>
                        <i></i>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="password" class="input-f" required>
                        <span>Saisir mot de passe</span>
                        <i></i>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="passwordConf" class="input-f" required>
                        <span>Confirmer mot de passe</span>
                        <i></i>
                    </div>
                    <button type="submit" name="submit" class="submit-btn">S'inscrire</button>
            </form>
        </div>
    </div>
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
        $(document).ready(function(){
            $("#MDP").click(function(){
                $(".pwdOublie").show();
            });

            $("#closeForm").click(function(){
                $(".pwdOublie").hide();
            });
        });
    </script>
</body>
</html>