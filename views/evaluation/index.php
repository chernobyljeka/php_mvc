<?php include ROOT . '/views/layouts/header.php';?>
  <div class="container">
        <div class="panel panel-default">
        <div class="panel-body">
            <h3>Оценка услуг</h3>
            <form action="/evaluation/index" method="post" role="form">
             <table class="table table-hover"> 
                <thead>
                    <tr> <th>#</th> <th>Название отдела</th> <th>Название услуги</th> <th>Оценка</th></tr>
                </thead> 
                <tbody> 
                <?php foreach($servicesList  as $serv): ?>
                    <tr> 
                        <td scope="row"><?php echo $serv["ID_serv"];?></td> 
                        <td><?php echo $serv["Name"]; ?></td>
                        <td><?php echo $serv["Name_serv"]; ?></td>
                        <td><input type="number" max="5" min="1" value="1" name="<?php echo 'id' . $serv["ID_serv"];?>" id="<?php echo 'id' . $serv["ID_serv"];?>"></td>
                    </tr>
                <?php endforeach; ?>
                </tbody> 
            </table>
                <input type="submit" id="submit" name="submit" class="btn btn-default">
            </form>
        </div>
      </div>
    </div>
<?php include ROOT . '/views/layouts/footer.php';?>