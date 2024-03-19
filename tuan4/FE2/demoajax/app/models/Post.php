<?php
class Post extends Database
{
    public function all() {
        $sql = parent::$connection->prepare('SELECT * FROM `posts`');
        return parent::select($sql);
    }

    public function show($id) {
        $sql = parent::$connection->prepare('SELECT * FROM `posts` WHERE `id`=?');
        $sql->bind_param('i', $id);
        return parent::select($sql)[0];
    }
    
    public function view($id) {
        $sql = parent::$connection->prepare('UPDATE `posts` SET `views`= views + ceiling(rand()*10) WHERE `id`=?');
        $sql->bind_param('i', $id);
        return $sql->execute();
    }

    public function like($id) {
        $sql = parent::$connection->prepare('UPDATE `posts` SET `likes`= likes + 1 WHERE `id`=?');
        $sql->bind_param('i', $id);
        return $sql->execute();
    }


}
