<aside id="recent-comments-2" class="widget widget_recent_comments">
    <h4 class="widget-title">Commentaires Récents</h4>
    <ul id="recentcomments">

        <?php 
            require dirname(__DIR__,2). '/model/comment.php';
            $comments = getAllCommentsWithLimit('3');
            foreach($comments as $num => $comment){
        ?>
        <li class="recentcomments">
            <a href="view/post.php?id=<?= $comment['ID'] ?>"><?= $comment['comment_content'] ?></a>
        </li>


        <?php } ?>
    </ul>
</aside>