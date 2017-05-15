<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DepartamentController
 *
 * @author Ded
 */
class DepartamentController {
    //put your code here
    public function actionAdd()
    {
        if (isset($_POST['submit_add']))
        {
            $name = $_POST['departament'];
            Departament::add($name);
        }
        $listDepartament = Departament::getList();
        require_once(ROOT . '/views/departament/add.php');
        return true;
    }
    
    public function actionList()
    {
        $listDepartament = Departament::getList();
        require_once(ROOT . '/views/departament/list.php');
        return true;
    }
}
