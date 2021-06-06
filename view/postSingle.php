<?php
require '../model/model.php';

$post = getOnePost($_GET);

?>

<div id="content" class="site-content">
    <div id="primary" class="content-area column two-thirds">
        <main id="main" class="site-main" role="main">
            <article>
                <header class="entry-header">
                    <h1 class="entry-title"><?= $post['post_title'] ?></h1>
                    <div class="entry-meta">
                        <span class="posted-on"><time class="entry-date published">Le
                                <?= $post['post_date'] ?></time></span>
                        <span class="posted-on"><time class="entry-date published"> - Par
                                <?= $post['display_name'] ?></time></span>

                    </div>

                </header>
                <!-- .entry-header -->
                <div class="entry-content">
                    <p><?= $post['post_content'] ?></p>

                </div>

                <!-- .entry-footer -->
            </article>
            <!-- #post-## -->
            <nav class="navigation post-navigation" role="navigation">
                <h1 class="screen-reader-text">Post navigation</h1>
                <div class="nav-links">
                    <div class="nav-previous">
                        <a href="http://localhost/simplon/Simplon-Projet5-Blog/index.php" rel="prev"><span
                                class="meta-nav">←</span> Merci d'avoir lu l'article!</a>
                    </div>
                </div>
                <!-- .nav-links -->
            </nav>
            <!-- .navigation -->
            <?php require 'widgetAddComments.php'; ?>
            <!-- #comments -->
        </main>
        <!-- #main -->
    </div>
    <div id="secondary" class="column third">
        <div id="sidebar-1" class="widget-area" role="complementary">

            <?php require 'widgetLastPosts.php'; ?>

            <?php require 'widgetLastComments.php'; ?>

        </div>
        <!-- .widget-area -->
    </div>
    <!-- #secondary -->
</div>
<!-- #content -->