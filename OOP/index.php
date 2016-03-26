<?php

session_start();

$_SESSION['user'] = array();
$_SESSION['user']['name'] = 'Carlos';


require('User.php');
require('Coffee.php');

class Controller {

    public function action () {

        $user = new User($_SESSION['user']);

        $coffe = new Coffee();

        $message = $user->drink($coffe);

        echo $message;
    }
}

$controller = new Controller;

$controller->action();