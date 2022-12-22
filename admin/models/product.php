<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT maSanPham, maHangSX, tenHang,tenSanPham,maLoaiSP,giaSanPham,hinhSP,moTaSP FROM products, manufactures WHERE products.maHangSX = manufactures.maHang");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function countProducts()
    {
        $sql = self::$connection->prepare("SELECT COUNT(maSanPham) FROM `products`");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function insertProduct($tenSP, $hang, $loai, $gia, $hinh, $moTa, $spNB)
    {
        $sql = self::$connection->prepare("INSERT INTO `products`(`tenSanPham`, `maHangSX`, `maLoaiSP`, `giaSanPham`, `hinhSP`,`moTaSP`, `sPNoiBat`) VALUES (?,?,?,?,?,?,?)");
        $sql->bind_param('siiissi', $tenSP, $hang, $loai, $gia, $hinh, $moTa, $spNB);
        $sql->execute();
    }
    public function deleteProduct($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `maSanPham` = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
    }
    public function editProduct($tenSP, $hang, $loai, $gia, $hinh, $moTa, $spNB, $id)
    {
        $sql = self::$connection->prepare("UPDATE `products` SET `tenSanPham`= ?,`maHangSX`= ?,`maLoaiSP`= ?,`giaSanPham`=?,`hinhSP`=?,`moTaSP`=?,`sPNoiBat`= ? WHERE `maSanPham` = ?");
        $sql->bind_param("siiissii", $tenSP, $hang, $loai, $gia, $hinh, $moTa, $spNB, $id);
        $sql->execute();
    }
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT maSanPham, maHangSX, tenHang,tenSanPham,maLoaiSP,hinh1,hinh2,hinh3,hinh4,giaSanPham,hinhSP,moTaSP, moTaSP1, sPNoiBat FROM products, manufactures WHERE products.maHangSX = manufactures.maHang AND maSanPham = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
