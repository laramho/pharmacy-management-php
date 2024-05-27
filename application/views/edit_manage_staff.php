<?php
foreach ($one_value as $one_info) {
    $record_id = $one_info->id;
    $one_name = $one_info->username;
    $one_password = $one_info->password;
}
?>
<!-- /.Breadcrumb -->
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Создание опции</a></li>
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
                        <span class="glyphicon glyphicon-person" aria-hidden="true"></span> Управление персоналом</a>
                    <a href="<?php echo base_url(); ?>ShowForm/manage_staff/main" class="list-group-item">
                        <span class="fa fa-truck-moving" aria-hidden="true"></span> Создать сотрудника</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Создать сотрудника</h3>
                    </div>

                    <div class="panel-body">

                        <!-- /.Panel End -->
                        <?php echo form_open_multipart('Insert/edit_staff_info/'.$record_id); ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="username">Имя пользователя</label>
                                    <input type="text" class="form-control" id="username" placeholder=""
                                           value="<?php echo $one_name; ?>" name="username">
                                </div>
                                <div class="col-sm-6">
                                    <label for="password">Пароль</label>
                                    <input type="password" class="form-control" id="password" placeholder=""
                                           value="<?php echo $one_password; ?>" name="password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4" style="margin-top: 17px;">
                                    <button type="submit" class="pull-left btn btn-primary">Обновить</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.Panel End -->
                <!-- /.Panel 2nd -->

            </div>
        </div> <!-- /.row -->
    </div> <!-- /.Container -->
</section>
