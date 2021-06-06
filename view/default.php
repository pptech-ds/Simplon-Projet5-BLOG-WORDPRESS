<!DOCTYPE html>
<html lang="fr">

<?php require 'view/head.php' ?>

<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
    <div id="page">
        <div class="container">

            <?php require 'view/headerSiteDescription.php' ?>

            <div id="content" class="site-content">
                <div id="primary" class="content-area column full">
                    <main id="main" class="site-main">
                        <div class="grid portfoliogrid">

                            <?php require 'view/postFrame.php' ?>

                        </div>
                    </main>
                </div>
            </div>
        </div>

        <?php require 'view/footerSiteDescription.php' ?>

        <a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
    </div>
    <script src='js/jquery.js'></script>
    <script src='js/plugins.js'></script>
    <script src='js/scripts.js'></script>
    <script src='js/masonry.pkgd.min.js'></script>
</body>

</html>