<?php
class User extends Db
{

    public function getAllUser()
    {
        $sql = self::$connection->prepare("SELECT `user_id`,`username`,`password`,name_roles FROM `users`,roles WHERE users.role_id = roles.roles_id");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function insertResgiter($username, $password, $role_id)
    {
        $sql = self::$connection->prepare("INSERT INTO `users`( `username`, `password`, `role_id`) VALUES (?,?,?)");
        $sql->bind_param('ssi', $username, $password, $role_id);
        $sql->execute();
    }
    public function deleteUser($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `users` WHERE `user_id` = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
    }
    public function editUser($username, $password, $role_id, $id)
    {
        $sql = self::$connection->prepare("UPDATE `users` SET `username`= ?,`password`=?,`role_id`=? WHERE `user_id` = ?");
        $sql->bind_param("ssii", $username, $password, $role_id, $id);
        $sql->execute(); //return an object
    }
}
