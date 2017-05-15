<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author Ded
 */
class UserController {
    
    public function actionLogin()
    {
        $result = false;
        $pas_error = true;
        $uname = '';
        $upas = '';
        if (isset($_POST["login-submit"]))
        {
            $uname = $_POST["l_email"];
            $upas = $_POST["l_password"];
            
            $pashash = md5($upas);
            $user_data = User::getID($uname);
            if ($pashash == $user_data['Password'])
            {
                User::SignUp($user_data['ID_user'], $user_data['Name'], $uname);
                $result = true;
                header('Location: /cabinet/index');
            }
            else {
                 $pas_error = false;
            }
        }
        require_once(ROOT . '/views/user/register.php');
        return true;
    }

    public function actionRegister() {
        $result = false;
        $pas_error = true;
        $uname = '';
        $upas = '';
        if (isset($_POST["register-submit"]))
        {
            $name = $_POST["username"];
            $email = $_POST["email"];
            $pas = $_POST["password"];
            $pashash = md5($pas);
            User::register($name, $email, $pashash);  
            $result = true;
        }
        
        if(isset($_GET['result']) && !isset($_POST["register-submit"])) 
        {
            $res = $_GET['result'];
            $email_status = User::checkEmailExist($res);
            if ($email_status)
                echo "Yes"; 
            else
                echo "No";
            exit();
        }
        require_once(ROOT . '/views/user/register.php');
        return true;
    }
    
    public function actionLogout()
    {
        // Стартуем сессию
        session_start();
        
        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["user_id"]);
        unset($_SESSION["name"]);
        unset($_SESSION["email"]);
        
        // Перенаправляем пользователя на главную страницу
        header("Location: /");
    }

}
