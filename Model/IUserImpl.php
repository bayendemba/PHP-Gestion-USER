<?php
    require_once 'Dbao.php';
    require_once '../../mapping/User.php';
    require_once 'IUser.php';

    class IUserImpl extends Dbao implements IUser{
        public function __construct(){
            //parent::__construct();
             //new Db();
        }



        public function addUser(User $u)
        {
            $sql = "INSERT INTO user VALUES('','".$u->getLogin()."','".$u->getPassword()."')";
            return $this->executeMAJ($sql);
        }

        public function updateUser(User $u)
        {
            $sql = "UPDATE user SET login='".$u->getLogin()."', password='".$u->getPassword()."' WHERE id=".$u->getId();
            return $this->executeMAJ($sql);
        }

        public function getUserById($id)
        {
            $sql = "SELECT * FROM user WHERE id=".$id;
            return $this->executeSELECT($sql);
        }

        public function listeUser()
        {
            $sql = "SELECT * FROM user";
            return $this->executeSELECT($sql);
        }

        public function getCountUserByLogin($login, $password)
        {
            $sql = "SELECT COUNT(*) FROM user Where login='".$login."' and password='".$password."'";
            $resultat = $this->executeSELECT($sql);
            $ok = false;
            while($val = $resultat->fetch()) {
                if(!empty($val))
                    $ok = false;
            }
            return $ok;
        }

        public function deleteUser($id)
        {
            $sql = "DELETE FROM user WHERE id=".$id;
            return $this->executeMAJ($sql);
        }
    }

?>