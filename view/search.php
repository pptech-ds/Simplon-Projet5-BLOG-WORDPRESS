<?php

echo 'in SEARCH';

?>

<!DOCTYPE html>
<html lang="fr">

<?php require dirname(__DIR__).'/view/head.php' ?>
<?php require dirname(__DIR__).'/model/model.php' ?>

<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
    <div id="page">
        <div class="container">

            <?php require dirname(__DIR__).'/view/headerSiteDescription.php' ?>

            <div id="content" class="site-content">
                <div id="primary" class="content-area column full">
                    <main id="main" class="site-main">
                        <div class="grid portfoliogrid">

                            <?php require dirname(__DIR__).'/view/searchFrame.php' ?>

                        </div>
                    </main>
                </div>
            </div>
        </div>

        <?php require dirname(__DIR__).'/view/footerSiteDescription.php' ?>

        <a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
    </div>
    <?php require dirname(__DIR__).'/view/jsScripts.php' ?>
</body>

</html>