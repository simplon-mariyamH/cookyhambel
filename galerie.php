<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-pink.min.css" />
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <link rel="stylesheet" type="text/css" href="galerie.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <title>Galerie</title>
    </head>
    <body>
        
        <?php include("menus.php"); ?>
        <main class="mdl-layout__content">
            <div class="page-content">
            <!-- Your content goes here -->
                <div id="container">
                    <span id="sl_play" class="sl_command"></span>
                    <span id="sl_pause" class="sl_command"></span>
                     
                    <span id="sl_i1" class="sl_command sl_i"></span>
                    <span id="sl_i2" class="sl_command sl_i"></span>
                    <span id="sl_i3" class="sl_command sl_i"></span>
                    <span id="sl_i4" class="sl_command sl_i"></span>

                    <section id="slideshow">

                        <a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
                        <a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>

                        <div class="container">
                            <div class="c_slider">   
                            </div>
                            <!--partie qui glisse-->
                            <div class="slider">
                                <figure>
                                    <img src="13350534_477754972420162_2174232920113001969_o.jpg" alt="" width="640" height="310" />
                                    <figcaption>Tiramisu
                                    </figcaption>

                                </figure><!--
                                --><figure>
                                    <img src="1933429_445209415674718_5347501909220426766_o.jpg" alt="" width="640" height="310" />
                                    <figcaption>CupFlag
                                    </figcaption>
                                </figure><!--
                                --><figure>
                                    <img src="13442597_477754999086826_992210677704155588_o.jpg" alt="" width="640" height="310" />
                                    <figcaption>Macaron <em></em>
                                    </figcaption>

                                </figure><!--
                                --><figure>
                                    <img src="12038211_401204466741880_1955411010832614969_n.jpg" alt="" width="640" height="310" />
                                    <figcaption>A thème !</figcaption>
                                </figure>
                            </div>
                        </div>
                        <!--barre de défilement-->
                        <span id="timeline"></span>
                        <ul class="dots_commands"><!---->
                            <li><a title="Afficher la slide 1" href="#sl_i1">Slide 1</a></li><!---->
                            <li><a title="Afficher la slide 2" href="#sl_i2">Slide 2</a></li><!---->
                            <li><a title="Afficher la slide 3" href="#sl_i3">Slide 3</a></li><!---->
                            <li><a title="Afficher la slide 4" href="#sl_i4">Slide 4</a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </main>
        <?php include("footer.php"); ?>
   </body>
</html>