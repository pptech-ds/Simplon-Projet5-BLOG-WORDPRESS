<aside id="recent-comments-2" class="widget widget_recent_comments">
    <h4 class="widget-title">Commentaires Récents</h4>
    <ul id="recentcomments">

        <?php 
            $comments = getAllComments('3');
            foreach($comments as $num => $comment){
        ?>
        <li class="recentcomments">
            <a
                href="http://localhost/simplon/Simplon-Projet5-Blog/view/post.php?id=<?= $comment['ID'] ?>"><?= $comment['comment_content'] ?></a>
        </li>


        <?php } ?>
    </ul>
</aside>