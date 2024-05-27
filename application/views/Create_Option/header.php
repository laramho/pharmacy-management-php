<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />

    <title>АИС | ПО</title>
    <link rel="stylesheet" type="image/png" href="<?php echo base_url(); ?>assets/icon.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/bootstrap.min.js">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<!-- Main Body -->

<body>

    <!-- Menu Bar -->
    <!--/.nav-collapse -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Переключить навигацию</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url(); ?>Main/enter">Панель управления</a></li>
					<li><a href="<?php echo base_url(); ?>ShowForm/create_medicine_name/main">Создать опции</a></li>
					<li><a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_info/main">Запасы</a></li>
					<li><a href="<?php echo base_url(); ?>ShowForm/sell_medicine/main">Продажи</a></li>
					<li><a href="<?php echo base_url(); ?>ShowForm/profit_loss/main">Бухгалтерия</a></li>
					<li><a href="<?php echo base_url(); ?>ShowForm/manage_staff/main">Управление персоналом</a></li>
				</ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="#">Добро пожаловать</a></li>
                    <li><a href="<?php echo base_url(); ?>main/logout">Выход</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.nav End -->

    <header id="header">
        <div class="container">
            <div class="col-md-10">
                <h2>
                    <i class="fa fa-medkit"></i>
					Аптечная информационная система 
                </h2>
            </div>
        </div>
    </header>
