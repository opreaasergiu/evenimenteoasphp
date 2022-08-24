<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Evenimente OAS - Contact</title>
    <link rel="stylesheet" href="style.css">
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
    <br><br><br><br><br>
    <h1 class="trimitemesaj">Trimite-ne un mesaj</h1>
    
    <form class="form-mesaj" action="includes/contact.inc.php" method="post">
        <div id="first">
            <tag class="text-form">Prenume si nume:<br></tag>
            <input type="text" id="prenume" name="prenume" placeholder="Prenume">
            <input type="text" id="nume" name="nume" placeholder="Nume"><br>
            <text-form>Numar de telefon:<br></text-form>
            <input type="text" id="nrtel" name="nrtel" placeholder="Numar de telefon"><br>
            <text-form>E-mail:<br></text-form>
            <input type="text" id="email" name="email" placeholder="E-mail"><br>
            <text-form>Mesaj:<br></text-form>
            <textarea type="text" name="mesaj" placeholder="Scrie mesajul tau aici..." rows="8"></textarea><br>
          <input type="submit" name="submit-contact" class="buton" value="Trimite">
        </div>
        
        <div id="div-contact">
            <h1>Contact</h1>
            
            <p class="contact-p">Evenimente OAS @Copyright</p>
            <p class="contact-p">E-mail: evenimenteoas@gmail.com</p>
            <p class="contact-p">Telefon: 0720 861 719</p>
            
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