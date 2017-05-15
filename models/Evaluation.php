<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Evaluation
 *
 * @author Ded
 */
class Evaluation {
    
    public static function add($id, $id_user, $rating)
    {
         // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'Insert Into rating_service (ID_serv, ID_user, '
                . 'DataRating, Rating) values (:id, :id_user, :date_now, :rating)';
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $date_now = date("Y-m-d H:i:s");
        $result->bindParam(':date_now', $date_now);
        $result->bindParam(':rating', $rating);
        return $result->execute();
    }
    
    public static function delete($id_user)
    {
         // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'delete from rating_service where ID_user = :id_user;';
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function get()
    {
        
    }
}
