<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Services
 *
 * @author Ded
 */
class Services {
    
    public static function getList()
    {
        // Соединение с БД        
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT s.ID_serv, s.Name_serv, d.ID_depart, d.Name  FROM departament as d '
                . 'INNER JOIN services as s on d.ID_depart = s.ID_dep Order BY ID_depart;';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->execute();

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public static function add($name, $dep_id)
    {
         // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO `services` (Name_serv, ID_dep) VALUES (:name, :dep_id);';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':dep_id', $dep_id, PDO::PARAM_INT);
        return $result->execute();
    }
            
}
