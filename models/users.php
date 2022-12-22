<?php
class User extends Db
{
    public function checkLogin($username, $password)
    {
        $sql = self::$connection->prepare("SELECT * FROM `users` INNER JOIN roles ON users.role_id = roles.roles_id WHERE users.username = ? and users.password = ? and (roles.name_roles = 'ADMIN' or roles.name_roles = 'USER')");
        $password = md5($password);
        $sql->bind_param('ss', $username, $password);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return true;
        } else {
            return false;
        }
    }
    public function insertResgiter($username, $password, $role_id)
    {
        $sql = self::$connection->prepare("INSERT INTO `users`( `username`, `password`, `role_id`) VALUES (?,?,?)");
        $sql->bind_param('ssi', $username, $password, $role_id);
        $sql->execute();
    }
}
