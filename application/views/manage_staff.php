<?php
if ($msg == "main") {
    $msg = "";
} elseif ($msg == "empty") {
    $msg = "Пожалуйста, заполните все обязательные поля";
} elseif ($msg == "created") {
    $msg = "Создано успешно";
} elseif ($msg == "edit") {
    $msg = "Отредактировано успешно";
} elseif ($msg == "delete") {
    $msg = "Удалено успешно";
}
?>
<!-- /.Breadcrumb -->
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Создать опцию</a></li>
            <li class="active"><?php echo $msg; ?></li>
        </ol>
    </div>
</section>

<!-- /.container -->
<section id="main">
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Управление персоналом</a>
                    <a href="<?php echo base_url(); ?>ShowForm/manage_staff/main" class="list-group-item">
                        <span class="far fa-user" aria-hidden="true"></span> Создать сотрудника</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Создать сотрудника</h3>
                    </div>

                    <div class="panel-body">

                        <!-- /.Panel End -->
                        <?php echo form_open_multipart('Insert/create_staff'); ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="username">Имя пользователя</label>
                                    <input type="text" class="form-control" id="username" placeholder="" name="username">
                                </div>
                                <div class="col-sm-6">
                                    <label for="password">Пароль</label>
                                    <input type="password" class="form-control" id="password" placeholder="" name="password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4" style="margin-top: 17px;">
                                    <button type="submit" class="pull-left btn btn-primary">Создать</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.Panel End -->
                <!-- /.Panel 2nd -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Список сотрудников</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: center;">Имя пользователя</th>
                                        <th style="text-align: center;">Действие</th>
                                    </tr>
                                </thead>
                                <!-- /.Row from DB-->
                                <tbody>
                                    <?php
                                    $count = 0;
                                    foreach ($all_value as $single_value) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $count; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->username; ?></td>
                                            <td style="text-align: center;">
                                                <a style="margin: 5px;" class="btn btn-danger"
                                                   href="<?php echo base_url(); ?>Delete/manage_staff/<?php echo $single_value->id; ?>">Удалить
                                                </a>
                                                <a style="margin: 5px;" class="btn btn-success"
                                                   href="<?php echo base_url(); ?>ShowForm/edit_staff_info/<?php echo $single_value->id; ?>">Редактировать
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- /.Panel End -->
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.Container -->
</section>
