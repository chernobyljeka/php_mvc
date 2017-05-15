<?php include ROOT . '/views/layouts/header.php';?>
    <div class="container">
        <div class="panel panel-default">
        <div class="panel-body">
          <h3>Список банковских услуг</h3>
            <table class="table table-hover"> 
                <thead>
                    <tr> <th>#</th> <th>Название отдела</th><th>Название услуги</th></tr>
                </thead> 
                <tbody> 
                <?php foreach($servicesList as $service): ?>
                    <tr> 
                        <td scope="row"><?php print_r ($service["ID_serv"]);?></td>
                        <td scope="row"><?php print_r ($service["Name"]);?></td> 
                        <td><?php print_r ($service["Name_serv"]);?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody> 
            </table>
            <?php if(isset($_SESSION['user_id'])): ?>
                <a class = "btn btn-default" href="/services/add">Добавить</a>
            <?php endif;?>
        </div>
      </div>
    </div>
<?php include ROOT . '/views/layouts/footer.php';?>