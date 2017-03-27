<?php
  class PostsController {
    public function index(){
      // we store all the posts in a variable
      $posts = Posts::all();
      require_once('views/posts/index.php');
    }

    public function show(){
      // we expect a url from /controller=posts&action=show&id=x

      // without and id we just redirect to the error page as
      // need the post id to find it in the database

      if (!isset($_GET['id'])) return call('pages', 'error');

      // we use the given id to get the right post
      $post = Post::find($_GET['id']);
      require_once('views/posts/show.php');
    }
  }
?>
