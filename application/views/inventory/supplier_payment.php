<?php
if ($msg == "main") {
	$msg = "";
} elseif ($msg == "empty") {
	$msg = "Пожалуйста, заполните все обязательные поля";
} elseif ($msg == "created") {
	$msg = "Успешно создано";
} elseif ($msg == "edit") {
	$msg = "Успешно отредактировано";
} elseif ($msg == "delete") {
	$msg = "Успешно удалено";
}
?>
<!-- /.Breadcrumb -->
<section id="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Оплата Поставщикам</a></li>
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
					<a href="index.html" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Оплата Поставщикам</a>
					<a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_info/main" class="list-group-item">
						<span class="fa fa-capsules" aria-hidden="true"></span> Информация о Покупке Лекарств</a>
					<a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_statement/main" class="list-group-item">
						<span class="fa fa-file-alt" aria-hidden="true"></span> Выписка о Покупке Лекарств</a>
					<a href="<?php echo base_url(); ?>ShowForm/supplier_payment/main" class="list-group-item">
						<span class="fa fa-truck-moving" aria-hidden="true"></span> Оплата Поставщикам</a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Оплата Поставщикам</h3>
					</div>

					<div class="panel-body">
						<!-- /.Panel End -->
						<div class="row">
							<div class="col-md-12">
								<?php echo form_open_multipart('Insert/supplier_payment'); ?>
								<div class="box-body">
									<div class="form-group" style="width: 400px;">
										<label for="supplier_name">Имя Поставщика</label>
										<input type="text" class="form-control" id="supplier_name" placeholder="" name="supplier_name">
									</div>
									<div class="form-group" style="width: 400px;">
										<label for="payment_amount">Сумма оплаты</label>
										<input type="number" class="form-control" id="payment_amount" placeholder="" name="payment_amount">
									</div>
								</div>
								<div class="box-footer">
									<button type="submit" class="pull-left btn btn-primary">Оплатить</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div><!-- /.Panel End -->
				<!-- /.Panel 2nd -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Список Оплат Поставщикам</h3>
					</div>
					<div class="panel-body">
						<div class="panel-body">
							<table class="table table-striped table-bordered table-hover">
								<thead>
								<tr>
									<th style="text-align: center;">#</th>
									<th style="text-align: center;">Имя Поставщика</th>
									<th style="text-align: center;">Сумма Оплаты</th>
									<th style="text-align: center;">Дата Оплаты</th>
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
										<td style="text-align: center;"><?php echo $single_value->supplier_name; ?></td>
										<td style="text-align: center;"><?php echo $single_value->payment_amount; ?></td>
										<td style="text-align: center;"><?php echo date('d/m/Y', strtotime($single_value->payment_date)); ?></td>
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
