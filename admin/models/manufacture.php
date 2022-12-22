<?php
class Manufacture extends Db
{
    public function getAllManufacture()
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function insertManufacture($tenHang)
    {
        $sql = self::$connection->prepare("INSERT INTO `manufactures`(`tenHang`) VALUES (?)");
        $sql->bind_param('s', $tenHang);
        $sql->execute();
    }
    public function deleteManufacture($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `maHang` = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
    }
    public function editManufacture($tenLoai, $id)
    {
        $sql = self::$connection->prepare("UPDATE `manufactures` SET `tenHang`= ? WHERE `maHang`=?");
        $sql->bind_param("si", $tenLoai, $id);
        $sql->execute(); //return an object
    }
    public function getManuById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `manufactures` WHERE `maHang` = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
