<?php
class Database
{
    public static $connection = NULL;
    public function __construct()
    {
        if (!self::$connection) {
            self::$connection = new mysqli(DB_HOST, DB_USER, DB_PASW, DB_NAME);
            self::$connection->set_charset('utf8mb4');
        }
        
    }

    public function select($sql) {
        $items = [];
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}
