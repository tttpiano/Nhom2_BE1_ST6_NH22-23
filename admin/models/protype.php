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
    public function insertProtype($tenLoai)
    {
        $sql = self::$connection->prepare("INSERT INTO `protype`(`tenLoai`) VALUES (?)");
        $sql->bind_param('s', $tenLoai);
        $sql->execute();
    }
    public function deleteProtype($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `protype` WHERE `maLoai` = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
    }
    public function editProtype($tenLoai, $id)
    {
        $sql = self::$connection->prepare("UPDATE `protype` SET `tenLoai`= ? WHERE `maLoai`= ?");
        $sql->bind_param("si", $tenLoai, $id);
        $sql->execute(); //return an object
    }
    public function getProtypeById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `protype` WHERE `maLoai` = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
