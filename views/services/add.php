<?php include ROOT . '/views/layouts/header.php';?>
    <div class="container">
        <div class="panel panel-default">
        <div class="panel-body">
          <h3>Добавить отдел</h3>
          <form action="/services/add" method="post">
              
              
              <div class="form-group">
               <label for="departament">Выберите отдел</label>
              <select id="departament" name="departament" class="form-control">
                 <?php foreach ($dep as $d) 
                     {
                        echo '<option value="'. $d["ID_depart"] .'">'. $d["Name"] .'</option>';
                     }
                 ?>
              </select>
              </div>
              
              <div class="form-group">
                <label for="serv_name">Название услуги</label>
                <input id="serv_name" name="serv_name" type="text" class="form-control" placeholder="Введите название услуги">
              </div>
              
              <input type="submit" id="submit" name="submit" class="btn btn-default">
          </form>
        </div>
      </div>
    </div>
<?php include ROOT . '/views/layouts/footer.php';?>