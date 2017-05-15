<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CabinetController
 *
 * @author Ded
 */
class CabinetController {
    
    public function actionIndex()
    {
        if (isset($_SESSION['user_id']))
        {
            $name = $_SESSION['name'];
            $email = $_SESSION['email'];
            $id = $_SESSION['user_id'];
        }
        else
        {
            header('Location: /user/login');
        }
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }
}
