<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Result
 *
 * @author Ded
 */
class Result {
    public static function getStat()
    {
        // Соединение с БД        
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'select d.ID_depart, s.Name_serv, sum(r.Rating)/count(r.Rating) as x ' .
               'from rating_service as r, departament as d, services as s ' .
               'where s.ID_serv = r.ID_serv and s.ID_dep = d.ID_depart ' .
               'group by s.ID_serv;';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->execute();

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public static function getDep()
    {
        // Соединение с БД        
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'select d.ID_depart, d.Name, sum(r.Rating)/count(r.Rating) as x ' .
                'from rating_service as r, departament as d, services as s ' .
                'where s.ID_serv = r.ID_serv and s.ID_dep = d.ID_depart ' .
                'group by d.ID_depart;';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->execute();

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
