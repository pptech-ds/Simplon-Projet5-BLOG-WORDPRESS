<?php

try {
    $page = isset($_GET['page']) ? $_GET['page'] : 'post.all';

    // var_dump($page);

    if ($page === 'post.all') {
        require dirname(__DIR__) . '/controller/postController.php';
        all();
    } elseif ($page === 'post.one') {
        require dirname(__DIR__) . '/controller/postController.php';
        one();
    } else {
        throw new Exception('404');
    }
} catch (Exception $e) {
    require dirname(__DIR__) . '/controller/errorController.php';
    error($e);
}