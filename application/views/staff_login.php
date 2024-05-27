<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />

    <title>PMS|Вход для персонала</title>

    <link rel="stylesheet" type="image/png" href="<?php echo base_url(); ?>assets/icon.png">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/js/bootstrap.min.js">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li style="align-self: center;"><a href="#">PMS - PHP CodeIgniter</a></li>
          </ul>
          
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
    <!--/.nav End -->

    <header id="header">
      <div class="container">
        <div class="col-md-10">
          <h1 class="text-center">
            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
            Вход для персонала <small>Аптечная информационная система</small>
          </h1>
        </div>
      </div>
    </header>

    <!-- /.container -->
   <section id="main">
       <div class="row">
           <div class="col-md-4 col-md-offset-4">
             <form method="post" class="well" action="<?php echo base_url();?>staff/login_validation">
                <div class="form-group">
                  <label for="username">Имя пользователя</label>
                  <input type="username" name="username" class="form-control"/>
                  <span class="text-danger"><?php echo form_error('username');?></span>
                </div>
                <div class="form-group">
                  <label for="password">Пароль:</label>
                  <input type="password" name="password" class="form-control"/>
                  <span class="text-danger"><?php echo form_error('password');?></span>
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
             </form>
           </div>
       </div>
    </section>
  </body>
</html>
