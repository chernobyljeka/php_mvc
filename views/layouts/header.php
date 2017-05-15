<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Bank Service Desk</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Меню</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Service Desk</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="nav navbar-nav navbar-left">
          <li><a href="/departament/list">Список отделов</a></li>
          <li><a href="/services/list">Список услуг</a></li>
          <li><a href="/evaluation/index">Оценить услуги</a></li>
          <li><a href="/result/index">Результаты оценки</a></li>
      </div>
      <ul class="nav navbar-nav navbar-right">
           <?php if (!isset($_SESSION['user_id'])) : ?>
            <li><a href="/user/login">Вход</a></li>
            <li><a href="/user/register">Регистрация</a></li>
           <?php else : ?>
            <li><a href="/cabinet/index">Личный кабинет</a></li>
            <li><a href="/user/logout">Выход</a></li>
           <?php endif; ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
	
