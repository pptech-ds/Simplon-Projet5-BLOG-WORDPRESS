<?php 

function all()
{
    require dirname(__DIR__) . '/model/post.php';
    $posts = getAllPostsWithLimit('100');
    // var_dump($posts);

    render('all', compact('posts'));
}


function one()
{
    require dirname(__DIR__) . '/model/post.php';
    $post = getOnePostByID($_GET['ID']);

    render('one', compact('post'));
    
}


function render($view, $data)
{
    extract($data);

    ob_start();
    require dirname(__DIR__) . '/view/post/' . $view . '.php';
    $content = ob_get_clean();

    require dirname(__DIR__) . '/view/base.php';
}