<?php
class Protype extends Db
{
    public function getAllProtype()
    {
        $sql = self::$connection->prepare("SELECT * FROM Protype");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getOneProtype()
    {
        $sql = self::$connection->prepare("SELECT * FROM Protype ORDER BY `maLoai` ASC LIMIT 0,1");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getFourProtype()
    {
        $sql = self::$connection->prepare("SELECT * FROM Protype ORDER BY `maLoai` ASC LIMIT 1,4");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
