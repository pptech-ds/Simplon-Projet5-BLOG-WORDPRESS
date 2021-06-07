<?php

function getDBConnection() :PDO
{
    $user = 'root';
    $pass = '';
    $dbname = 'pepinieres_baches';
    $host = 'localhost';

    try {
        $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
        $dbh = new PDO($dsn, $user, $pass, $options);

        return $dbh;
        
    } catch (PDOException $e) {
        print 'Error !: ' . $e->getMessage() . '<br/>';
        die();
    }
}


function getAllPosts(string $limit) :array
{
    try {
        $dbh = getDBConnection();

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


function getOnePost(array $get) :array
{
    try {
        $dbh = getDBConnection();

        $query = '  SELECT post_title, post_content, post_date, display_name  
                    FROM wp_posts, wp_users
                    WHERE post_author = wp_users.ID
                        AND wp_posts.ID = ' . $get["id"];

        $req = $dbh->query($query);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $posts = $req->fetch();
        $req->closeCursor();

        

        $dbh = null;

        return $posts;

    } catch (PDOException $e) {
        print 'Error !: ' . $e->getMessage() . '<br/>';
        die();
    }
}



function getAllComments(string $limit) :array
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



function search(array $get) :array
{
    try {
        $dbh = getDBConnection();

        $query = '  SELECT 
                        wp_posts.ID,
                        post_title, 
                        post_content,
                        post_date, 
                        display_name  
                    FROM wp_posts
                    INNER JOIN wp_users ON post_author = wp_users.ID
                    WHERE (post_type = "post"
                    AND post_status = "publish")
                    AND (post_title LIKE :s  
                    OR post_content LIKE :s)  
                    ORDER BY post_date DESC';

        $req = $dbh->prepare($query);
        $req -> bindValue(':s', '%'.$get['s'].'%', PDO::PARAM_STR);
        $req -> execute();
        $req ->setFetchMode(PDO::FETCH_ASSOC);
        $posts = $req->fetchAll();
        $req ->closeCursor();

        

        $dbh = null;

        return $posts;

    } catch (PDOException $e) {
        print 'Error !: ' . $e->getMessage() . '<br/>';
        die();
    }
}