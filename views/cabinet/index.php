<?php include ROOT . '/views/layouts/header.php';?>
   <div class="container">    
                <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="/assets/img/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">
                            <h2><?php echo $name; ?></h2>
                          </div>
                            <hr>
                          <ul class="container details">
                             <li><p><span class="glyphicon glyphicon-briefcase one" style="width:50px;"></span>Эксперт №<?php echo $id; ?></p></li>
                            <!--<li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>Функция недоступна</p></li>-->
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php echo $email; ?></p></li>
                            <!--<li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span><a>Функция недоступна</a></p>-->
                            <li><a href=""></a></li>
                          </li></ul>      
                      </div>
                  </div>
                </div>
                            
    </div>
<?php include ROOT . '/views/layouts/footer.php';?>