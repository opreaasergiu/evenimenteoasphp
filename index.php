<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Evenimente OAS</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/warszawa" type="text/css"/> 
        <link rel="stylesheet" href = "style.css">
    </head>

    <body style="background-color: #D7CEC7;">
        <div class="nav">
            <div class="meniu">
                <?php
                    if(isset($_SESSION['userId'])){
                        echo '<ul>
                              <li><a href="index.php"><div style="text-decoration-color: #D67940">Acasa</div></a></li>
                              <li><a href="evenimente.php">Evenimente</a></li>
                              <li><a href="despre.php">Despre noi</a></li>
                              <li><a href="contact.php">Contact</a></li>
                              <li><a href="profil.php" name="profil-enter" class="profil-link">Profil</a></li>
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
                                  <button type="submit" name="logout-submit" class="buton">Log Out</button>
                              </form>';
                    }
                    else{
                        echo '<form action="includes/login.inc.php" method="post" style="padding-top: 40px;">
                                  <input type="text" name="mailuid" placeholder="Username/E-mail...">
                                  <input type="password" name="pwd" placeholder="Password...">
                                  <button type="submit" name="login-submit" class="buton">Login</button>
                              </form>
                              <a href="signup.php" class="signuplink">Sign Up</a>';
                    }
                ?>
            </div>
        </div>
        
        <div class="wrapper">
            <br><br>
            
            <br>
            
            <div class="imgmain" id="imgmain">
            <img src="imagini/ptindex.jpg">
            </div>
            
            <p>Un specialist in organizare evenimente ????i poate transforma visul ??n realitate.</p>
            <br>
            <p>Un eveniment special, fie c?? este nunt??, botez, aniversare sau un eveniment corporate, ar putea fi cu u??urin???? una dintre zilele cele mai pre??uite din via??a ta. Noi vrem ca faza de organizare s?? fie la fel de special?? pentru tine. Te vom ajuta s?? navighezi cu u??urin???? prin diferite decizii ??i s?? stai f??r?? griji p??n?? la sosirea a??teptatului eveniment. Vei fi ferit de lungi c??ut??ri, obositoare discu??ii cu furnizorii, eventuale dezacorduri ??i nepl??ceri inevitabile pe parcursul procesului de organizare evenimente. Planificarea cu noi poate fi aproape la fel de distractiv?? ca evenimentul ??n sine.</p>
            <br>
            <p>Organizatorul de eveniment este liantul, intermediarul, ??ntre tine (clientul) ??i to??i ceilal??i furnizori. De??i angajarea unui specialist ??n organizare evenimente reprezint?? un cost suplimentar, aceast?? persoan?? are mai multe rela??ii ??i cuno??tin??e ??n domeniu ??i ????i poate propune metode creative de a-??i organiza nunta perfect??, ??n limita bugetului disponibil. Astfel, vei avea parte de servicii mai bune cu un cost avantajos. Apel??nd la un specialist ??n organizare evenimente, vei avea un beneficiu real: vei economisi timp, energie ??i vei avea mai mult?? eficien???? ??n organizarea evenimentului mult dorit. ??nt??lniri, telefoane ??i e-mail-uri cu un singur om ??? toate sunt nelimitate cu scopul comun ca evenimentul t??u s?? fie perfect!</p>
            <br>
            <p>Vom ??ncepe colaborarea printr-o discu??ie am??nun??it?? pentru a identifica nevoile ??i dorin??ele voastre ??i a creiona bugetul evenimentului. Vom detalia preferin??ele voastre ??n privin??a fiec??rui segment de care va urma s?? ne ocup??m. ??n func??ie de stadiul ??n care te afli cu organizarea evenimentului, vom ??ncepe preg??tirile de la zero sau din etapa l??sat?? de tine. Pentru fiecare segment ve??i primi propuneri targetate de furnizori care s?? satisfac?? dorin??ele voastre. Ne inform??m continuu despre trend-urile in domeniu ??i c??ut??m s?? ne form??m rela??ii cu c??t mai mul??i furnizori.</p>
            <br>
            <p>Un organizator de eveniment te poate ajuta ??i s?? evi??i tot felul de gre??eli costisitoare. De exemplu, poate ????i dore??ti o forma??ie cu 12 membri, dar un specialist poate s?? evalueze spa??iul disponibil raportat ??i la num??rul de invita??i ??i s?? ????i explice de ce aceasta nu ar fi cea mai inspirat?? idee. Cel mai important, organizatorul se ocup?? de tot ce este necesar ??n ziua evenimentului. Dac?? ??l la??i s??-??i dirijeze evenimentul ??i s??-??i serveasc?? drept persoan?? de contact cu to??i furnizorii, vei putea s?? te bucuri din plin de ziua cea mare.</p>
            <br>
            <p>Pentru c?? avem dubl?? specializare, pe l??ng?? partea organizatoric??, vei primi consultan???? pentru ??ntreg conceptul de design ??i decor care s?? transforme evenimentul t??u ??ntr-unul de vis. Vom crea un eveniment cu stil ??i creativitate, care va reflecta personalitatea ta. Mai multe informa??ii despre design de eveniment g??se??ti aici.</p>
            <br>
            <p>Pre??ul serviciului de organizare evenimente difer?? ??n func??ie de dimensiunea ??i complexitatea evenimentului, astfel c??, dac?? e??ti interesat s?? colabor??m cere???ne o ofert??.</p>
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
            
        </div>
    </body>
</html>