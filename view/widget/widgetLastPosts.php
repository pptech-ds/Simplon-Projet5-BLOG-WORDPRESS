<aside id="recent-posts-2" class="widget widget_recent_entries">
    <h4 class="widget-title">Articles Récents</h4>
    <ul>

        <?php 
            $posts = getAllPosts('3');
            foreach($posts as $num => $post){
        ?>
        <li>
            <a
                href="view/post.php?id=<?= $post['ID'] ?>"><?= $post['post_title'] ?></a>

        </li>
        <?php } ?>
    </ul>
</aside>