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
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT maSanPham, maHangSX, tenHang,tenSanPham,maLoaiSP,hinh1,hinh2,hinh3,hinh4,giaSanPham,hinhSP,moTaSP, moTaSP1 FROM products, manufactures WHERE products.maHangSX = manufactures.maHang AND maSanPham = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductById2($id)
    {
        $sql = self::$connection->prepare("SELECT maSanPham,tenHang,tenLoai,tenSanPham,giaSanPham,hinhSP,moTaSP FROM products INNER JOIN manufactures on products.maHangSX = manufactures.maHang INNER JOIN protype on products.maLoaiSP = protype.maLoai WHERE products.maSanPham = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = array(); //return an object
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items[0];
    }
    public function getNewProducts()
    {
        $sql = self::$connection->prepare("SELECT maSanPham, tenSanPham, tenHang, giaSanPham,hinhSP FROM products, manufactures WHERE products.maHangSX = manufactures.maHang ORDER BY `maSanPham` DESC LIMIT 0,10");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopSellingProducts()
    {
        $sql = self::$connection->prepare("SELECT maSanPham, tenSanPham, tenHang, giaSanPham,hinhSP FROM products, manufactures WHERE products.maHangSX = manufactures.maHang AND SPBanChay > 300 ");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopSelling_0_3()
    {
        $sql = self::$connection->prepare("SELECT maSanPham, tenSanPham, tenHang, giaSanPham,hinhSP,SPBanChay FROM products, manufactures WHERE products.maHangSX = manufactures.maHang AND SPBanChay > 300 ORDER BY products.SPBanChay DESC LIMIT 0,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopSelling_3_6()
    {
        $sql = self::$connection->prepare("SELECT maSanPham, tenSanPham, tenHang, giaSanPham,hinhSP,SPBanChay FROM products, manufactures WHERE products.maHangSX = manufactures.maHang AND SPBanChay > 300 ORDER BY products.SPBanChay DESC LIMIT 3,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopSelling_6_9()
    {
        $sql = self::$connection->prepare("SELECT maSanPham, tenSanPham, tenHang, giaSanPham,hinhSP,SPBanChay FROM products, manufactures WHERE products.maHangSX = manufactures.maHang AND SPBanChay > 300 ORDER BY products.SPBanChay DESC LIMIT 6,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProducts()
    {
        $sql = self::$connection->prepare("SELECT maSanPham, maHangSX, tenHang,tenSanPham,maLoaiSP,giaSanPham,hinhSP,moTaSP FROM products, manufactures WHERE products.maHangSX = manufactures.maHang LIMIT 0,4");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getProductByIdMaLoai($id, $startImages, $imagess)
    {
        if (empty($id)) {
            $sql = self::$connection->prepare("SELECT maSanPham, maHangSX, tenHang,tenSanPham,maLoaiSP,giaSanPham,hinhSP,moTaSP FROM products, manufactures WHERE products.maHangSX = manufactures.maHang Limit $startImages, $imagess");
        } else {
            $sql = self::$connection->prepare("SELECT maSanPham, maHangSX, tenHang,tenSanPham,maLoaiSP,giaSanPham,hinhSP,moTaSP FROM products, manufactures WHERE products.maHangSX = manufactures.maHang AND maLoaiSP = ? Limit $startImages, $imagess");
            $sql->bind_param("i", $id);
        }

        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search($keyWord)
    {
        $sql = self::$connection->prepare("SELECT maSanPham, maHangSX, tenHang,tenSanPham,maLoaiSP,giaSanPham,hinhSP,moTaSP FROM products, manufactures WHERE products.maHangSX = manufactures.maHang AND tenSanPham like ?");
        $keyWord = "%$keyWord%";
        $sql->bind_param("s", $keyWord);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductByBrand($brands)
    {
        $sql = self::$connection->prepare("SELECT maSanPham,tenHang,tenLoai,tenSanPham,giaSanPham,hinhSP,moTaSP FROM products INNER JOIN manufactures on products.maHangSX = manufactures.maHang INNER JOIN protype on products.maLoaiSP = protype.maLoai WHERE manufactures.tenHang in (" . $brands . ")");
        //$sql->bind_param("s", $brands);
        $sql->execute();
        $items = array(); //return an object
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getProductBytyles($tyles)
    {
        $sql = self::$connection->prepare("SELECT maSanPham,tenHang,tenLoai,tenSanPham,giaSanPham,hinhSP,moTaSP FROM products INNER JOIN manufactures on products.maHangSX = manufactures.maHang INNER JOIN protype on products.maLoaiSP = protype.maLoai WHERE manufactures.tenLoai in (" . $tyles . ")");
        //$sql->bind_param("s", $brands);
        $sql->execute();
        $items = array(); //return an object
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getPagesStore($startImages, $imagess)
    {
        $data = null;
        $sql = "SELECT maSanPham, maHangSX, tenHang,tenSanPham,maLoaiSP,giaSanPham,hinhSP,moTaSP FROM products, manufactures WHERE products.maHangSX = manufactures.maHang Limit $startImages, $imagess";
        $result = self::$connection->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $page[] = $row;
            }
            return $page;
        }
    }
    public function totalProductByLoai($id)
    {
        $sql = self::$connection->prepare("SELECT * From products where maLoaiSP = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $items = array(); //return an object
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

        // return $items[0];
        return count($items);
    }
}
