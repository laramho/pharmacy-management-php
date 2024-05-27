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
			<li><a href="#">Выписка о Покупках</a></li>
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
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Выписка о Покупках</a>
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
						<h3 class="panel-title">Выписка о Покупках</h3>
					</div>

					<div class="panel-body">
						<!-- /.Panel End -->
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table table-bordered table-hover table-striped">
										<thead>
											<tr>
												<th style="text-align: center;">#</th>
												<th style="text-align: center;">Название Лекарства</th>
												<th style="text-align: center;">Количество</th>
												<th style="text-align: center;">Цена</th>
												<th style="text-align: center;">Имя Поставщика</th>
												<th style="text-align: center;">Дата Покупки</th>
												<th style="text-align: center;">Общая Стоимость</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$count = 0;
											foreach ($all_value as $single_value) {
												$count++;
												$total_cost = $single_value->purchase_quantity * $single_value->purchase_price;
												?>
												<tr>
													<td style="text-align: center;"><?php echo $count; ?></td>
													<td style="text-align: center;"><?php echo $single_value->medicine_name; ?></td>
													<td style="text-align: center;"><?php echo $single_value->purchase_quantity; ?></td>
													<td style="text-align: center;"><?php echo $single_value->purchase_price; ?></td>
													<td style="text-align: center;"><?php echo $single_value->supplier_name; ?></td>
													<td style="text-align: center;"><?php echo $single_value->purchase_date; ?></td>
													<td style="text-align: center;"><?php echo $total_cost; ?></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!-- /.Panel End -->
				</div><!-- /.Panel End -->
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->
</section>
