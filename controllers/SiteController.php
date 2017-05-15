<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SiteController
 *
 * @author Ded
 */
class SiteController {
    //put your code here
    public function actionIndex()
    {
        if (isset($_SESSION['user_id']))
        {
            $uname = $_SESSION['name'];
        }
        require_once(ROOT . '/views/site/index.php');
        return true;
    }
}
