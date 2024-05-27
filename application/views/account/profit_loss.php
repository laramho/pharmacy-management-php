<?php
/**
 * Created by PhpStorm.
 * User: bmmah
 * Date: 4/2/2019
 * Time: 10:56 PM
 */

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
    <div class="container" id="no_print3">
        <ol class="breadcrumb">
            <li><a href="#" >Бухгалтерия</a></li>
            <li class="active"><?php echo $msg; ?></li>
        </ol>
    </div>
</section>

<!-- /.container -->
<section id="main">
    <div class="container">

        <div class="row">
            <div class="col-md-3" id="no_print2">
                <div class="list-group">
                    <a href="#" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Бухгалтерия</a>
                    <a href="<?php echo base_url(); ?>ShowForm/profit_loss/main"
                       class="list-group-item">
                        <span class="\tfa fa-capsules" aria-hidden="true"></span> Прибыль-Убыток</a>
                </div>
            </div>
            <div class="col-md-9" id="no_print1">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Прибыль-Убыток</h3>
                    </div>

                    <div class="panel-body">

                        <!-- /.Panel End -->
                        <?php echo form_open_multipart('Insert/medicine_purchase_info'); ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-4" style="">
                                    <label for="date_from">Дата с</label>
                                    <input type="date" class="form-control datepicker"
                                           placeholder="Введите дату" name="date_from" id="date_from"
                                           autocomplete="off">
                                </div>
                                <div class="col-sm-4" style="">
                                    <label for="date_to">Дата по</label>
                                    <input type="date" class="form-control datepicker"
                                           placeholder="Введите дату" name="date_to" id="date_to"
                                           autocomplete="off">
                                </div>
                                <div class="col-sm-4" style="margin-top: 25px;">
                                    <button type="submit" class="pull-left btn btn-primary">Показать</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div><!-- /.Panel End -->
                <!-- /.Panel 2nd -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Прибыль-Убыток</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: center;">Наименование</th>
                                        <th style="text-align: center;">Категория</th>
                                        <th style="text-align: center;">Срок годности</th>
                                        <th style="text-align: center;">Количество</th>
                                        <th style="text-align: center;">Себестоимость</th>
                                        <th style="text-align: center;">Цена продажи</th>
                                        <th style="text-align: center;">Прибыль-Убыток</th>
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
                                            <td style="text-align: center;"><?php echo $single_value->medicine_name; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->category_name; ?></td>
                                            <td style="text-align: center;"><?php echo date('d-M-Y', strtotime($single_value->expire_date)); ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->qty; ?></td>
                                            <td style="text-align: center;">$<?php echo $single_value->buy_price; ?></td>
                                            <td style="text-align: center;">$<?php echo $single_value->sell_price; ?></td>
                                            <td style="text-align: center;">
                                                <?php
                                                $profit_loss = $single_value->sell_price - $single_value->buy_price;
                                                if ($profit_loss > 0) {
                                                    echo '$' . $profit_loss . ' [Прибыль]';
                                                } else {
                                                    echo '$' . (-$profit_loss) . ' [Убыток]';
                                                }
                                                ?>
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

<style>
    @media print {
        a[href]:after {
            content: none !important;
        }

        #print_button {
            display: none;
        }

        #no_print1 {
            display: none;
        }
        #no_print2 {
            display: none;
        }
        #no_print3 {
            display: none;
        }
        #no_print4 {
            display: none;
        }
    }
</style>
