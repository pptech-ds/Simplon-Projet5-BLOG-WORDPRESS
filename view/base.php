<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pépinières Bachès</title>
    <link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700'
        type='text/css' media='all' />
    <link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all' />
</head>

<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
    <div id="page">
        <div class="container">

            <header id="masthead" class="site-header">
                <div class="site-branding">
                    <h1 class="site-title"><a href="index.php" rel="home">Pépinières
                            Bachès</a></h1>
                    <h2 class="site-description">Pépinière d'agrumes</h2>
                </div>
                <?php require dirname(__DIR__).'/view/shared/_nav.php' ?>
            </header>



            <?= $content ?>


        </div>

        <footer id="colophon" class="site-footer">
            <div class="container">
                <div class="site-info">
                    <h1
                        style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">
                        Pépinières Bachès</h1>
                    <a target="blank" href="index.php">&copy;
                        Pépinières Bachès -
                        Pépinière d'agrumes</a>
                </div>
            </div>
        </footer>

        <a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
    </div>
    <script src='js/jquery.js'></script>
    <script src='js/plugins.js'></script>
    <script src='js/scripts.js'></script>
    <script src='js/masonry.pkgd.min.js'></script>
    <script src='js/validate.js'></script>
</body>

</html>