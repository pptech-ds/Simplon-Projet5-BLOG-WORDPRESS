<?php

require dirname(__DIR__).'/model/dbConn.php';


function getAllPosts() :array
{
    try {
        $query = '  SELECT 
                        wp_posts.ID,
                        post_title, 
                        post_content,
                        post_date, 
                        display_name  
                    FROM wp_posts, wp_users
                    WHERE post_type = "post"
                        AND post_status = "publish"
                        AND post_author = wp_users.ID
                    ORDER BY post_date DESC';

        $req = getDBConnection()->query($query);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $posts = $req->fetchAll();
        $req->closeCursor();

        return $posts;

    } catch (PDOException $e) {
        print 'Error !: ' . $e->getMessage() . '<br/>';
        die();
    }
}



function getAllPostsWithLimit(string $limit) :array
{
    try {
        $query = '  SELECT 
                        wp_posts.ID,
                        post_title, 
                        post_content,
                        post_date, 
                        display_name  
                    FROM wp_posts, wp_users
                    WHERE post_type = "post"
                        AND post_status = "publish"
                        AND post_author = wp_users.ID
                    ORDER BY post_date DESC
                    LIMIT '.$limit;

        $req = getDBConnection()->query($query);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $posts = $req->fetchAll();
        $req->closeCursor();

        return $posts;

    } catch (PDOException $e) {
        print 'Error !: ' . $e->getMessage() . '<br/>';
        die();
    }
}


function getOnePostByID($id) :array
{
    try {
        $query = '  SELECT post_title, post_content, post_date, display_name  
                    FROM wp_posts, wp_users
                    WHERE post_author = wp_users.ID
                        AND wp_posts.ID = ' . $id;

        // var_dump($query);

        $req = getDBConnection()->query($query);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $post = $req->fetch();
        $req->closeCursor();

        return $post;

    } catch (PDOException $e) {
        print 'Error !: ' . $e->getMessage() . '<br/>';
        die();
    }
}