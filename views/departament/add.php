<?php include ROOT . '/views/layouts/header.php';?>
    <div class="container">
        <div class="panel panel-default">
        <div class="panel-body">
            <form id="form-add-departament" method="post" action="/departament/add" role="form" class="form-inline">
            <h3>Добавление отдела</h3>
            <div class="form-group">
              <input type="text" class="form-control" id="departament" name="departament" placeholder="Назавание отдела">
            </div>
              <input name="submit_add" id="submit_add" type="submit" class="btn btn-default" value="Добавить">
          </form>
          <h3>Список отделов</h3>
            <table class="table table-hover"> 
                <thead>
                    <tr> <th>#</th> <th>Название отдела</th></tr>
                </thead> 
                <tbody> 
                <?php foreach($listDepartament as $department): ?>
                    <tr> 
                        <td scope="row"><?php print_r ($department["ID_depart"]);?></td> 
                        <td><?php print_r ($department["Name"]);?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody> 
            </table>
        </div>
      </div>
    </div>
<?php include ROOT . '/views/layouts/footer.php';?>