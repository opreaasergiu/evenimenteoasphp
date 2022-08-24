<?php
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo "Welcome to the member's area, ";
    } 
    else {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Profil</title>
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
        
        <br><br><br>
        <h4 style="text-align:center;">Schimbare username/email:</h4>
        
        <form action="includes/update.inc.php" method="post">
            <div class="resetare">
                <input type="text" name="oldmail" placeholder="Vechea adresa de e-mail..."><br>
                <input type="text" name="newmail" placeholder="Noua adresa de e-mail..."><br>
                <input type="text" name="newuser" placeholder="Noul nume de utilizator..."><br>
                <input type="password" name="pwd" placeholder="Parola..."><br>
                <input type="password" name="pwd-repeat" placeholder="Confirma parola..."><br><br>
                <button type="submit" class="buton" name="submit-update"> Update </button>
            </div>
        </form>
        <br>
        <h4 style="text-align:center;">Stergere cont:</h4>
        
        <form action="includes/delete.inc.php" method="post">
            <div class="resetare">
                <input type="text" name="mail" placeholder="E-mail..."><br>
                <input type="password" name="pwd-del" placeholder="Parola..."><br>
                <input type="password" name="pwd-del-repeat" placeholder="Confirma parola..."><br><br>
                <button type="submit" class="buton" name="submit-delete">Sterge cont</button>
            </div>
        </form>
        
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