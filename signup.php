<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Evenimente OAS - Sign Up</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/warszawa" type="text/css"/> 
        <link rel="stylesheet" href = "style.css">
    </head>
    
    <body>
        <div class="nav">
            <div class="meniu">
                <?php
                    if(isset($_SESSION['userId'])){
                        echo '<ul>
                              <li><a href="index.php"><div style="text-decoration-color: #D67940">Acasa</div></a></li>
                              <li><a href="evenimente.php">Evenimente</a></li>
                              <li><a href="despre.php">Despre noi</a></li>
                              <li><a href="contact.php">Contact</a></li>
                              <li><a href="profil.php" name="profil-enter">Profil</a></li>
                              </ul>';
                    }
                    else{
                        echo '<ul>
                             <li><a href="index.php"><div style="text-decoration-color: #D67940">Acasa</div></a></li>
                             <li><a href="evenimente.php">Evenimente</a></li>
                             <li><a href="despre.php">Despre noi</a></li>
                             <li><a href="contact.php">Contact</a></li>
                             </ul>';
                    }
                ?>
                
            </div>
            <div class="loginetc">
                <?php
                    if(isset($_SESSION['userId'])){
                        echo '<form action="includes/logout.inc.php" method="post" style="padding: 40px;">
                                  <button type="submit" class="buton" name="logout-submit">Log Out</button>
                              </form>';
                    }
                    else{
                        echo '<form action="includes/login.inc.php" method="post" style="padding-top: 40px;">
                                  <input type="text" name="mailuid" placeholder="Username/E-mail...">
                                  <input type="password" name="pwd" placeholder="Password...">
                                  <button type="submit" class="buton" name="login-submit">Login</button>
                              </form>
                              <a href="signup.php" class="signuplink">Sign Up</a>';
                    }
                ?>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>
        <main class="signup">
            <h1>Signup</h1>
            
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo '<p class="signup-error">Completati toate campurile!</p>';
                    }
                    else if($_GET['error'] == "invaliduidmail"){
                        echo '<p class="signup-error">Username si mail invalide!</p>';
                    }
                    else if($_GET['error'] == "invaliduid"){
                        echo '<p class="signup-error">Username invalid!</p>';
                    }
                    else if($_GET['error'] == "invalidmail"){
                        echo '<p class="signup-error">E-mail invalid!</p>';
                    }
                    else if($_GET['error'] == "passwordcheck"){
                        echo '<p class="signup-error">Parolele nu sunt identice!</p>';
                    }
                    else if($_GET['error'] == "usertaken"){
                        echo '<p class="signup-error">Username-ul este folosit de catre alt utilizator!</p>';
                    }
                }
            else if($_GET["signup"] == "success"){
                echo '<p class="signup-success">Inregistrare cu succes!</p>';
            }
            ?>
            
            <br>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <br>
                <input type="text" name="mail" placeholder="E-mail">
                <br>
                <input type="password" name="pwd" placeholder="Parola">
                <br>
                <input type="password" name="pwd-repeat" placeholder="Repeta parola">
                <br><br>
                <button type="submit" name="signup-submit">Sign Up</button>
            </form>
        </main>
        
        <br><br><br>
            <div class="footer"> 
                
                <?php
                $ip = $_SERVER['REMOTE_ADDR'];
 
                if (array_key_exists('HTTP_CLIENT_IP', $_SERVER))
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                else if(array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER))
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                else
                    $ip = $_SERVER['REMOTE_ADDR'];
            
                if(isset($_SESSION['userId'])){
                    echo '<p class="login-status"> Esti logat!<br> IP: ', $ip, ' </p>';
                }
                else{
                    echo '<p class="login-status"> Nu esti logat!<br> IP: ', $ip, ' </p>';
                }
            ?>
            </div>
        
    </body>
    
</html>