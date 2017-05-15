<?php include ROOT . '/views/layouts/header.php';?>
    <div class="container">
        <div class="panel panel-default">
        <div class="panel-body">
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
            <?php if(isset($_SESSION['user_id'])): ?>
                <a class = "btn btn-default" href="/departament/add">Добавить</a>
            <?php endif;?>
        </div>
      </div>
    </div>
<?php include ROOT . '/views/layouts/footer.php';?>