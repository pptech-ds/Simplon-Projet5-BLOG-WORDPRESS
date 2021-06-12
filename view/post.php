<!DOCTYPE html>
<html lang="fr">

<?php require dirname(__DIR__).'/view/head.php' ?>

<body class="single single-post">
    <div id="page">
        <div class="container">
            <?php require dirname(__DIR__).'/view/headerSiteDescription.php' ?>
            <?php require dirname(__DIR__).'/view/postSingle.php'; ?>
        </div>
        <!-- .container -->
        <?php require dirname(__DIR__).'/view/footerSiteDescription.php' ?>
        <a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
    </div>
    <!-- #page -->
    <?php require dirname(__DIR__).'/view/jsScripts.php' ?>
</body>

</html>