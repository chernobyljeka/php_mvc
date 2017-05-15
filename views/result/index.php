<?php include ROOT . '/views/layouts/header.php';?>
   <div class="container">
        <div class="panel panel-default">
        <div class="panel-body">
            <h3>Рейтинг услуг</h3>
            
            <?php
               
               foreach ($dep as $d)
               {
                    $ot = number_format($d["x"], 1);
                    
                    $class = 'panel panel-danger';
                    
                    $otsenka = 'Отдел работает плохо';
                    
                    if ($ot >= 3 && $ot < 4)
                    {
                        $class = 'panel panel-warning';
                        $otsenka = 'Отдел работает удовлетворительно';
                    }
                    
                    if ($ot >= 4 && $ot <= 5)
                    {
                        $class = 'panel panel-info';
                        $otsenka = 'Отдел работает без проблемм';
                    }
                        
                    
                    echo '<div class="'. $class .'">
                    <!-- Default panel contents -->
                    <div class="panel-heading">'. $d["Name"] .' (Общая оценка '. $ot .' - '. $otsenka .')</div>

                    <!-- Table -->
                    <table class="table">
                    <thead>
                    <tr>
                    <th width="70%">Название услуги</th>
                    <th width="30%">Оценка</th>
                    </tr>
                    </thead> 
                    <tbody>';
                   foreach ($res as $r)
                   {
                       $otx = number_format($r["x"], 1);
                       if ($d["ID_depart"] == $r["ID_depart"])
                           echo '<tr><td>' . $r["Name_serv"] . '</td><td>' . $otx . '</td>';
                   }
                   echo 
                   '</tbody>
                    </table>
                    </div>';
               }
                
            ?>
            
                
        </div>
      </div>
    </div>
<?php include ROOT . '/views/layouts/footer.php';?>