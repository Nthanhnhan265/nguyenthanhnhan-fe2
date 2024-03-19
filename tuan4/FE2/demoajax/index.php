<?php
require_once 'config/database.php';
spl_autoload_register(function ($className) {
    require_once "app/models/$className.php";
});
$postModel = new Post();
$posts = $postModel->all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($posts as $post) : ?>
        <li><a href="show.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></li>
        <?php endforeach ?>
    </ul>

    <div class="content"></div>

    <script src="public/js/app.js"></script>
</body>
</html>