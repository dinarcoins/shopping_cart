<?php

namespace App\Controllers;

use \Core\View;
use App\Models\User;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller
{

    /**
     * Show the index page
     *
     *  @return void
     */
    public function indexAction()
    {
        $users = User::getAll();
        View::render('home/index.php', ['variable' => $users]);
    }

    public function adminAction()
    {   
        $users = User::getAll();
        View::render('admin/index.php' , ['variable' => $users]);
    }

    public function loginAction()
    {   
        $users = User::getAll();
        View::render('admin/login.php' , ['variable' => $users]);
    }

   
    public function contactAction()
    {

        $users = User::getAll();
        View::render('home/contact.php' , ['variable' => $users]);
    }

    public function collectionAction()
    {

        View::render('Home/collection.php');
    }

    public function racing_bootsAction()
    {

        View::render('Home/racing-boots.php');
    }

    public function shoesAction()
    {

        View::render('Home/shoes.php');
    }
}
