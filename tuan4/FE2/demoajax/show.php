<?php
require_once 'config/database.php';
spl_autoload_register(function ($className) {
    require_once "app/models/$className.php";
});
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$postModel = new Post();
$postModel->view($id);
$post = $postModel->show($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $post['title'] ?></h1>
    <p>
        View: <?php echo $post['views'] ?>
    </p>
    <p>
        <button class="btn-like" data-postid="<?php echo $post['id'] ?>">Like</button>
        <span class="post-likes"><?php echo $post['likes'] ?></span>
        
    </p>
    <?php echo $post['content'] ?>

    <script src="public/js/app.js"></script>
</body>
</html>


