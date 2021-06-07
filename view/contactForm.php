<!DOCTYPE html>
<html lang="fr">

<?php require 'head.php' ?>

<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
    <div id="page">
        <div class="container">
            <?php require 'headerSiteDescription.php'; ?>

            <!-- #masthead -->
            <div id="content" class="site-content">
                <div id="primary" class="content-area column full">
                    <main id="main" class="site-main">
                        <article id="post-39" class="post-39 page type-page status-publish hentry">
                            <header class="entry-header">
                                <h1 class="entry-title">Contact</h1>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">

                                <!-- BEGIN MAP -->
                                <p>
                                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                                <div style='overflow:hidden;height:380px;width:100%;'>
                                    <div id='gmap_canvas' style='height:380px;width:100%;'></div>
                                    <div>embed google maps</a></div>
                                    <style>
                                    #gmap_canvas img {
                                        max-width: none !important;
                                        background: none !important
                                    }
                                    </style>
                                </div>
                                <p>
                                    <script type='text/javascript'>
                                    function init_map() {
                                        var myOptions = {
                                            zoom: 10,
                                            center: new google.maps.LatLng(42.6357618, 2.4479563),
                                            mapTypeId: google.maps.MapTypeId.ROADMAP
                                        };
                                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                                        marker = new google.maps.Marker({
                                            map: map,
                                            position: new google.maps.LatLng(42.6357618, 2.4479563)
                                        });
                                        infowindow = new google.maps.InfoWindow({
                                            content: '<strong>Jane Photography</strong><br />Florida Beach<br />'
                                        });
                                        google.maps.event.addListener(marker, 'click', function() {
                                            infowindow.open(map, marker);
                                        });
                                        infowindow.open(map, marker);
                                    }
                                    google.maps.event.addDomListener(window, 'load', init_map);
                                    </script>
                                </p>
                                <!-- END MAP -->

                                <div class="wpcmsdev-columns">
                                    <div class="column column-width-one-half">
                                        <h4>Formulaire de Contact</h4>

                                        <form class="wpcf7" method="post" action="contact.php" id="contactform">
                                            <div class="form">
                                                <p><input type="text" name="name" placeholder="Nom *"></p>
                                                <p><input type="text" name="email" placeholder="E-mail *"></p>
                                                <p><textarea name="comment" rows="3" placeholder="Message *"></textarea>
                                                </p>
                                                <input type="submit" id="submit" class="clearfix btn" value="Envoyer">
                                            </div>
                                        </form>
                                        <div class="done">
                                            Votre message a été envoyé, merci !
                                        </div>

                                    </div>
                                    <div class="column column-width-one-half">
                                        <h4>Telephonez nous au: (+33) 4 68 96 42 91</h4>
                                        <p>
                                            Pépinières Bachès <br>
                                            66500 Las Feyches <br>
                                            66500 Eus <br>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content -->
                        </article>
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- #content -->
        </div>
        <!-- .container -->
        <?php require 'footerSiteDescription.php' ?>
        <a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
    </div>
    <!-- #page -->
    <?php require 'jsScripts.php' ?>
</body>

</html>