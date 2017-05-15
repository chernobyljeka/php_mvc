<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EvaluationController
 *
 * @author Ded
 */
class EvaluationController {
    public function actionIndex()
    {
        if (isset($_SESSION['user_id']))
        {
            $servicesList = Services::getList();
            if (isset($_POST['submit']))
            {
                $id_user = $_SESSION['user_id'];
                Evaluation::delete($id_user);

                $serv = Services::getList();

                foreach ($servicesList as $s) {
                    $id = $s["ID_serv"];
                    $rating = $_POST['id' . $id];
                    Evaluation::add($id, $id_user, $rating);
                }
            }
            require_once(ROOT . '/views/evaluation/index.php');
        }
        else 
        {
             require_once(ROOT . '/views/evaluation/not_login.php');
        }
        return true;
    }
}
