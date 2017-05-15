<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServicesController
 *
 * @author Ded
 */
class ServicesController {
    
    public function actionAdd()
    {
        if (isset($_POST['submit']))
        {
            $name = $_POST['serv_name'];
            $dep = $_POST['departament'];
            Services::add($name, $dep);
        }
        $dep = Departament::getList();
        require_once(ROOT . '/views/services/add.php');
        return true;
    }
    
    public function actionList()
    {
        $servicesList = Services::getList();
        require_once(ROOT . '/views/services/list.php');
        return true;
    }
}
