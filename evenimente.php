<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Evenimente OAS - Evenimente</title>
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
        <h1 style="text-align: center">Evenimente</h1>
        <br>
        <div>
            <div id="div1sd">
                <div class="icon_box_icon_position_top_no_border">
                    <div class="image_wrapper">
                        <img src="imagini/nunta.jpg" class="scale-with-grid" alt="promptitudine" width="480" height="213"/>
                    </div>
                    <div class="desc_wrapper">
                        <h4 class="title">Nunti</h4>
                        <div class="descd1">
                            Da, știm ce vrei să spui cu “aici și acum”. Și mai știm că de cele mai multe ori termenul limită e ieri. Nu-i nimic. Experiența ne ajută. Suntem aici. Acum. Livrăm la timp. Testează-ne!
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="div2sd">
                <div class="icon_box_icon_position_top_no_border">
                    <div class="image_wrapper">
                        <img src="imagini/botez.jpg" class="scale-with-grid" alt="promptitudine" width="480" height="213"/>
                    </div>
                    <div class="desc_wrapper">
                        <h4 class="title">Botezuri</h4>
                        <div class="descd2">
                            Da, știm ce vrei să spui cu “aici și acum”. Și mai știm că de cele mai multe ori termenul limită e ieri. Nu-i nimic. Experiența ne ajută. Suntem aici. Acum. Livrăm la timp. Testează-ne!
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="div1sd">
                <div class="icon_box_icon_position_top_no_border">
                    <div class="image_wrapper">
                        <img src="imagini/tematica.jpg" class="scale-with-grid" alt="promptitudine" width="480" height="213"/>
                    </div>
                    <div class="desc_wrapper">
                        <h4 class="title">Petreceri tematice</h4>
                        <div class="descd3">
                            Da, știm ce vrei să spui cu “aici și acum”. Și mai știm că de cele mai multe ori termenul limită e ieri. Nu-i nimic. Experiența ne ajută. Suntem aici. Acum. Livrăm la timp. Testează-ne!
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="div2sd">
                <div class="icon_box_icon_position_top_no_border">
                    <div class="image_wrapper">
                        <img src="imagini/corporate.jpg" class="scale-with-grid" alt="promptitudine" width="480" height="213"/>
                    </div>
                    <div class="desc_wrapper">
                        <h4 class="title">Corporate</h4>
                        <div class="descd3">
                            Da, știm ce vrei să spui cu “aici și acum”. Și mai știm că de cele mai multe ori termenul limită e ieri. Nu-i nimic. Experiența ne ajută. Suntem aici. Acum. Livrăm la timp. Testează-ne!
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
        
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