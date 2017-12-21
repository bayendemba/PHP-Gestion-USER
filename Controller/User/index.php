<?php

    require_once '../../mapping/User.php';
    require_once '../../Model/IUserImpl.php';
	
	if(isset($_GET['login'])){
		extract ($_GET);
		$us = new User(0, $login, $password);
		$usimp = new IUserImpl();
		$ok = $usimp->addUser($us);
		if($ok == true)
			echo "OK";
		else
			echo "NONOK";
	}

    if(isset($_GET['logincon']) && isset($_GET['passwordcon'])){
        extract ($_GET);
        $usimp = new IUserImpl();
        $result = $usimp->getCountUserByLogin($logincon, $passwordcon);
        if($result == true)
            echo "OK";
        else
            echo "NONOK";
    }

    if(isset($_GET['action'])){
        switch($_GET['action']){

            case 'ajout':
				
                require_once '../../View/User/addUser.php';
                break;

            case 'modif':
                $usimp = new IUserImpl();
                $id = $_GET['id'];
                $user = $usimp->getUserById($id);
                require_once '../../View/User/editUser.php';
                break;

            case 'supp':
                $usimp = new IUserImpl();
                $id = $_GET['id'];
                $ok = $usimp->deleteUser($id);
                $resultat = $usimp->listeUser();
                require_once '../../View/User/listeUser.php';
                break;

            case 'lister':
                $usimp = new IUserImpl();
                $resultat = $usimp->listerUser();
                require_once '../../View/User/listeUser.php';
                break;

            default:
                #code
        }
    }

    if(isset($_POST['action'])){

        switch($_POST['action']){

            case 'ajout':

               extract ($_POST);
                $us = new User(0, $login, $password);
                $usimp = new IUserImpl();
                $ok = $usimp->addUser($us);
                if($ok == true)
                    echo "Donnee ajoutee !";
                else
                    echo "Revoir le code !";

                require_once '../../View/User/listeUser.php';
                break;

            case 'modif':

                extract($_POST);
                $us = new User($id, $login, $password);
                $usimp = new IUserImpl();
                $ok = $usimp->updateUser($us);
                require_once '../../View/User/listeUser.php';
                break;

            case 'lister':

                require_once '../../View/User/addUser.php';
                break;

            default:
                #code
        }

    }
?>