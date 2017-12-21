<?php
/**
 * Created by PhpStorm.
 * User: MLS
 * Date: 02/07/2016
 * Time: 03:09
 */

class User {

    public function __construct($id=0, $login="", $password=""){

        $this->id = $id;
        $this->login = $login;
        $this->password = $password;

    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }



}