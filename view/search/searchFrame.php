<?php 

$posts = search($_GET);
foreach($posts as $num => $post){

?>

<article class="hentry">
    <header class="entry-header">
        <div class="entry-thumbnail">
            <a href="view/post.php?id=<?= $post['ID'] ?>"><img
                    src="https://picsum.photos/300/300?random=<?= $num ?>"></a>
        </div>
        <h2 class="entry-title"><a
                href="view/post.php?id=<?= $post['ID'] ?>"
                rel="bookmark"><?= $post['post_title'] ?></a></h2>
        <a class='portfoliotype'
            href='view/post.php?id=<?= $post['ID'] ?>'>Posté par
            <?= $post['display_name'] ?></a>
        <a class='portfoliotype'
            href='view/post.php?id=<?= $post['ID'] ?>'>Le
            <?= $post['post_date'] ?></a>
    </header>
</article>

<?php
}