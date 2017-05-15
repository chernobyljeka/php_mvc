<?php include ROOT . '/views/layouts/header.php';?>
<section>
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Вход</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Регистрация</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="/user/login" method="post" role="form" style="display: block;">
                                
                                <div class="form-group">
                                    <input type="text" name="l_email" id="l_email" tabindex="1" class="form-control" placeholder="E-mail" value="<?php echo $uname; ?>">
                                    <div id="el_email" class="alert alert-danger" role="alert">
                                        <strong>Ошибка!</strong> Введите корректный E-mail.
                                     </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="l_password" id="l_password" tabindex="2" class="form-control" placeholder="Пароль" value="<?php echo $upas; ?>">
                                    <div id="el_pas" class="alert alert-danger" role="alert">
                                        <strong>Ошибка!</strong> Пароль может быть меньше 6 символов.
                                     </div>
                                    <php echo $pas_error; ?>
                                    <?php if (!$pas_error) : ?>
                                    <div id="e_email_not_exist" class="alert alert-danger" role="alert" style="display: block; margin-top: 20px;">
                                        <strong>Ошибка!</strong> Неверные учетные данные.
                                     </div>
                                     <?php else: ?>
                                    <div id="e_email_not_exist" class="alert alert-danger" role="alert" >
                                        <strong>Ошибка!</strong> Неверные учетные данные.
                                     </div>                                    
                                     <?php endif; ?>
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember"> Запонить меня</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Вход">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="#" tabindex="5" class="forgot-password">Забыли пароль?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                            
                            <form id="register-form" action="/user/register" method="post" role="form" style="display: none;">
                                <?php if ($result): ?>
                                <div class="form-group">
                                    <div class="ok_register">
                                        <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                        <p>Вы успешно зарегисрировались</p>
                                        <button id="login_after_register" type="button" class="btn btn-default btn-lg">
                                           <span class="fa fa-user-circle-o" aria-hidden="true"></span> Войти на сайт
                                        </button>
                                    </div>     
                                </div>
                                <?php else: ?>
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Имя пользователя" value="">
                                    <div id="e_username" class="alert alert-danger" role="alert">
                                        <strong>Ошибка!</strong> Имя пользователя не может быть меньше 3 символов.
                                     </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="E-mail" value="">
                                    <div id="e_email" class="alert alert-danger" role="alert">
                                        <strong>Ошибка!</strong> Введите корректный e-mail!
                                     </div>
                                    <div id="e_email_exist" class="alert alert-danger" role="alert">
                                        <strong>Ошибка!</strong> Пользователь с таким адресом уже существует!
                                     </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Пароль">
                                     <div id="e_pas1" class="alert alert-danger" role="alert">
                                        <strong>Ошибка!</strong> Пароль не может меньше 6 символов.
                                     </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Повторите пароль">
                                    <div id="e_pas2" class="alert alert-danger" role="alert">
                                        <strong>Ошибка!</strong> Пароли не совпадают!
                                     </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Зарегистрироваться">
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php include ROOT . '/views/layouts/footer.php';?>