<?php

namespace App\Controllers;

use \Core\View;
use App\Models\User;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Auth extends \Core\Controller
{

    public function loginAction()
    {
        if(isset($_POST['login'])) {
            var_dump($_POST); 
            require ('admin/register.php');
            die;
// handle login here    

        } else {
            View::render('admin/login.php');
        }
    }
    public function registerAction()
    {
        if(isset($_POST['register'])) {
            var_dump($_POST); die;
// handle login here    

        } else {
            View::render('admin/register.php');
        }
    }

    public function registeruserAction()
    {
        if(isset($_POST['registerUser'])) {
           $user = User::registerUser($_POST);
           if($user) {
               header("Location:public/admin");

           }

        } else {
        View::render('admin/registeruser.php');
    }
    }

    function add($firstName , $email, $passwordHash ) {
		$add = [
			'firstName' => $firstName ,
			'email' => $email ,
			'passwordHash' => $passwordHash ,
        ];
	
		$_SESSION['infomations'][] = $add;
	
		header("Location:register.php");
	}
}