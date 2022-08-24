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
            <div class="imgmain" id="imgmain">
            <img src="imagini/ptindex.jpg">
            </div>
            
            <p>Un specialist in organizare evenimente îți poate transforma visul în realitate.</p>
            <br>
            <p>Un eveniment special, fie că este nuntă, botez, aniversare sau un eveniment corporate, ar putea fi cu ușurință una dintre zilele cele mai prețuite din viața ta. Noi vrem ca faza de organizare să fie la fel de specială pentru tine. Te vom ajuta să navighezi cu ușurință prin diferite decizii și să stai fără griji până la sosirea așteptatului eveniment. Vei fi ferit de lungi căutări, obositoare discuții cu furnizorii, eventuale dezacorduri și neplăceri inevitabile pe parcursul procesului de organizare evenimente. Planificarea cu noi poate fi aproape la fel de distractivă ca evenimentul în sine.</p>
            <br>
            <p>Organizatorul de eveniment este liantul, intermediarul, între tine (clientul) și toți ceilalți furnizori. Deși angajarea unui specialist în organizare evenimente reprezintă un cost suplimentar, această persoană are mai multe relații și cunoștințe în domeniu și îți poate propune metode creative de a-ți organiza nunta perfectă, în limita bugetului disponibil. Astfel, vei avea parte de servicii mai bune cu un cost avantajos. Apelând la un specialist în organizare evenimente, vei avea un beneficiu real: vei economisi timp, energie și vei avea mai multă eficiență în organizarea evenimentului mult dorit. Întâlniri, telefoane și e-mail-uri cu un singur om – toate sunt nelimitate cu scopul comun ca evenimentul tău să fie perfect!</p>
            <br>
            <p>Vom începe colaborarea printr-o discuție amănunțită pentru a identifica nevoile și dorințele voastre și a creiona bugetul evenimentului. Vom detalia preferințele voastre în privința fiecărui segment de care va urma să ne ocupăm. În funcție de stadiul în care te afli cu organizarea evenimentului, vom începe pregătirile de la zero sau din etapa lăsată de tine. Pentru fiecare segment veți primi propuneri targetate de furnizori care să satisfacă dorințele voastre. Ne informăm continuu despre trend-urile in domeniu și căutăm să ne formăm relații cu cât mai mulți furnizori.</p>
            <br>
            <p>Un organizator de eveniment te poate ajuta și să eviți tot felul de greșeli costisitoare. De exemplu, poate îți dorești o formație cu 12 membri, dar un specialist poate să evalueze spațiul disponibil raportat și la numărul de invitați și să îți explice de ce aceasta nu ar fi cea mai inspirată idee. Cel mai important, organizatorul se ocupă de tot ce este necesar în ziua evenimentului. Dacă îl lași să-ți dirijeze evenimentul și să-ți servească drept persoană de contact cu toți furnizorii, vei putea să te bucuri din plin de ziua cea mare.</p>
            <br>
            <p>Pentru că avem dublă specializare, pe lângă partea organizatorică, vei primi consultanță pentru întreg conceptul de design și decor care să transforme evenimentul tău într-unul de vis. Vom crea un eveniment cu stil și creativitate, care va reflecta personalitatea ta. Mai multe informații despre design de eveniment găsești aici.</p>
            <br>
            <p>Prețul serviciului de organizare evenimente diferă în funcție de dimensiunea și complexitatea evenimentului, astfel că, dacă ești interesat să colaborăm cere–ne o ofertă.</p>
            
            
            
        </div>
    </body>
</html>