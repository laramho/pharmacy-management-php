<?php
/**
 * Created by PhpStorm.
 * User: bmmah
 * Date: 4/2/2019
 * Time: 10:56 PM
 */
?>
<!-- /.container -->
<section id="main">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Прибыль-Убыток по продукту</h3>
                    </div>

                    <div class="panel-body">
                        <div class="panel-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: center;">Наименование</th>
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
                                            <td style="text-align: center;"><?php echo $single_value->product_name; ?></td>
                                            <td style="text-align: center;"><?php echo $single_value->product_qty; ?></td>
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
