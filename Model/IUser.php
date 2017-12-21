<?php
/**
 * Created by PhpStorm.
 * User: MLS
 * Date: 02/07/2016
 * Time: 03:04
 */

require_once '../../mapping/User.php';

interface IUser {

    public function addUser(User $u);
    public function deleteUser($id);
    public function updateUser(User $u);
    public function getUserById($id);
    public function listeUser();
    public function getCountUserByLogin($login, $password);

}