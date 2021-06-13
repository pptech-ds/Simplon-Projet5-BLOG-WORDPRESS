<div id="content" class="site-content">
    <div id="primary" class="content-area column full">
        <main id="main" class="site-main">
            <div class="grid portfoliogrid">

                <?php foreach($posts as $num => $post){ ?>

                <article class="hentry">
                    <header class="entry-header">
                        <div class="entry-thumbnail">
                            <a href="?page=post.one&ID=<?= $post['ID'] ?>"><img
                                    src="https://picsum.photos/300/300?random=<?= $num ?>"></a>
                        </div>
                        <h2 class="entry-title"><a href="?page=post.one&ID=<?= $post['ID'] ?>"
                                rel="bookmark"><?= $post['post_title'] ?></a></h2>
                        <a class='portfoliotype' href='?page=post.one&ID=<?= $post['ID'] ?>'>Posté par
                            <?= $post['display_name'] ?></a>
                        <a class='portfoliotype' href='?page=post.one&ID=<?= $post['ID'] ?>'>Le
                            <?= $post['post_date'] ?></a>
                    </header>
                </article>

                <?php } ?>

            </div>
        </main>
    </div>
</div>