<?php

// require dirname(__DIR__).'/model/dbConn.php';


function getAllComments() :array
{
    try {
        $dbh = getDBConnection();

        $query = '  SELECT 
                        wp_posts.ID,
                        post_title, 
                        post_content,
                        post_date, 
                        comment_author,
                        comment_content  
                    FROM wp_posts
                    INNER JOIN wp_comments ON wp_posts.ID = wp_comments.comment_post_ID
                    WHERE post_type = "post"
                        AND post_status = "publish"
                    ORDER BY post_date DESC';

        $req = $dbh->query($query);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $posts = $req->fetchAll();
        $req->closeCursor();

        $dbh = null;

        return $posts;

    } catch (PDOException $e) {
        print 'Error !: ' . $e->getMessage() . '<br/>';
        die();
    }
}



function getAllCommentsWithLimit(string $limit) :array
{
    try {
        $dbh = getDBConnection();

        $query = '  SELECT 
                        wp_posts.ID,
                        post_title, 
                        post_content,
                        post_date, 
                        comment_author,
                        comment_content  
                    FROM wp_posts
                    INNER JOIN wp_comments ON wp_posts.ID = wp_comments.comment_post_ID
                    WHERE post_type = "post"
                        AND post_status = "publish"
                    ORDER BY post_date DESC
                    LIMIT '.$limit;

        $req = $dbh->query($query);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $posts = $req->fetchAll();
        $req->closeCursor();

        $dbh = null;

        return $posts;

    } catch (PDOException $e) {
        print 'Error !: ' . $e->getMessage() . '<br/>';
        die();
    }
}