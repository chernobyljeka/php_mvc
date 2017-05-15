<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResultController
 *
 * @author Ded
 */
class ResultController {
    
    public function actionIndex()
    {
        $dep = Result::getDep();
        $res = Result::getStat();
        require_once(ROOT . '/views/result/index.php');
        return true;
    }
}
