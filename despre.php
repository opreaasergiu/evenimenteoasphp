<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Evenimente OAS - Despre noi</title>
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
        <br><br><br><br>
        <h1>Despre noi</h1>

        
        <div id="Content">
	<div class="content_wrapper clearfix">

		<div class="sections_group">
			<div class="entry-content" itemprop="mainContentOfPage">
				<div class="section mcb-section" style="padding-top:50px; padding-bottom:90px; background-color:" >
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix" style=""  >
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-">
                                    <div class="column_attr clearfix"  style="">
                                        <p class="big">
                                            Americanii spun “Time is Money”. Noi spunem “Fă ce știi să faci și lasă pe alții să-ți transpună dorințele în realitate”. Afacerea ta are nevoie de atenția cuvenită, așa că oferă-i-o. Nu îți pierde vremea în regii de spectacol cu cereri de ofertă, cu obținerea de avize, ci apelează la Pro Event. Nu acesta este punctul tău forte și apoi la ce folos dacă toate acestea au o soluție convenabilă? 
                                        <br>
                                        <br>
                                            Evenimente OAS este o agenție de marketing și de evenimente înființată în anul 2005. Suntem oameni de echipă, pasionați și talentați cu o experiență vastă în comunicare și în organizarea de evenimente excepționale.<br><br><br>
                                        </p>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" style="margin: 0 auto 20px;"/>
                                </div>
                                <div class="column mcb-column one column_fancy_heading ">
                                    <div class="fancy_heading fancy_heading_line">
                                        <h2 class="title">VALORILE NOASTRE</h2>
                                    </div>
                                </div>
                                
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line" style="margin: 0 auto 50px;"/>
                                </div>
                                
                                <div class="column_mcb-column_one-third_column_icon_box">
                                    <div class="icon_box_icon_position_top_no_border" id="div1">
                                        <div class="image_wrapper">
                                            <img src="https://proevent.ro/wp-content/uploads/2018/01/rezultate.png" class="scale-with-grid" alt="rezultate" width="190" height="206"/>
                                        </div>
                                        <div class="desc_wrapper">
                                            <h4 class="title">ORIENTARE CĂTRE REZULTATE</h4>
                                            <div class="desc">
                                                Primul pas este să te ascultăm. Care e obiectivul evenimentului tău? Apoi nu vom face altceva decât să slujim acestui obiectiv până îl atingem. Oferim servicii integrate de la concepere, planificare și organizare, comunicare și promovare, producție și implementare, coordonare și managementul evenimentului.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="column_mcb-column_one-third_column_icon_box" id="div2">
                                    <div class="icon_box_icon_position_top_no_border">
                                        <div class="image_wrapper">
                                            <img src="https://proevent.ro/wp-content/uploads/2018/01/flexibilitate.png" class="scale-with-grid" alt="flexibilitate" width="190" height="206"/>
                                        </div>
                                        <div class="desc_wrapper">
                                            <h4 class="title">FLEXIBILITATE</h4>
                                            <div class="desc">
                                                Clienții noștri au nevoie de servicii personalizate, atenție exclusivă și soluții customizate. Înțelegem și respectăm acest lucru. Mai mult, aplicăm! Suntem deschiși oricăror provocări și avem capacitatea de a ne adapta la schimbările necesare.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="column_mcb-column_one-third_column_icon_box" id="div3">
                                    <div class="icon_box_icon_position_to_ no_border">
                                        <div class="image_wrapper"><img src="https://proevent.ro/wp-content/uploads/2018/01/entuziasm.png" class="scale-with-grid" alt="entuziasm" width="190" height="206"/>
                                        </div>
                                        <div class="desc_wrapper">
                                            <h4 class="title">ENERGIE POZITIVĂ ȘI ENTUZIASM</h4>
                                            <div class="desc">
                                                Adorăm ceea ce facem și asta este motorul nostru. Ne dorim să creăm experiențe noi pentru clienții noștri și de aceea punem la bătaie toată energia noastră pentru a reuși. Ne iese întotdeauna!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                
                <div class="section mcb-section   "  style="padding-top:0px; padding-bottom:0px; background-color:" >
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix" style=""  >
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-fifth column_placeholder">
                                    <div class="placeholder">&nbsp;
                                    </div>
                                </div>
                                
                                <div class="column_mcb-column_one-third_column_icon_box" id="div4">
                                    <div class="icon_box_icon_position_top_no_border">
                                        <div class="image_wrapper">
                                            <img src="https://proevent.ro/wp-content/uploads/2018/01/creativitate.png" class="scale-with-grid" alt="creativitate" width="190" height="206"/>
                                        </div>
                                        <div class="desc_wrapper">
                                            <h4 class="title">CREATIVITATE</h4>
                                            <div class="descd4">
                                                Suntem inspirați și creativi și avem tot timpul idei noi și originale care să se plieze perfect pe specificul afacerii tale.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="column_mcb-column_one-third_column_icon_box" id="div5">
                                    <div class="icon_box_icon_position_top_no_border">
                                        <div class="image_wrapper">
                                            <img src="https://proevent.ro/wp-content/uploads/2018/01/promptitudine.png" class="scale-with-grid" alt="promptitudine" width="190" height="206"/>
                                        </div>
                                        <div class="desc_wrapper">
                                            <h4 class="title">PROMPTITUDINE</h4>
                                            <div class="descd5">
                                                Da, știm ce vrei să spui cu “aici și acum”. Și mai știm că de cele mai multe ori termenul limită e ieri. Nu-i nimic. Experiența ne ajută. Suntem aici. Acum. Livrăm la timp. Testează-ne!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section the_content no_content">
                    <div class="section_wrapper">
                        <div class="the_content_wrapper">
                        </div>
                    </div>
                </div>				
				<div class="section section-page-footer">
					<div class="section_wrapper clearfix">
						<div class="column one page-pager"> </div>
						
					</div>
				</div>
			</div>
        
        </div>
        
        </div>
        </div>
        <br>
        <tag class="echipa"><strong><a href="contact.php">Contacteaza-ne!</a></strong></tag>
        
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