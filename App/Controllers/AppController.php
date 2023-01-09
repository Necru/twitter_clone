<?php

namespace App\Controllers;

//os recursos do miniframework

use BadFunctionCallException;
use MF\Controller\Action;
use MF\Model\Container;
use MF\Model\Usuario;

class AppController extends Action {

    public function timeline() {

        session_start();

        if($_SESSION['id'] != '' && $_SESSION['nome'] != '') {
            $this->render('timeline');
        } else {
            header('Location: /?login=erro');
        }
    }

}

?>