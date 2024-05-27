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
			<li><a href="#">Информация о Покупке Лекарств</a></li>
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
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Информация о Покупке Лекарств</a>
					<a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_info/main" class="list-group-item">
						<span class="fa fa-capsules" aria-hidden="true"></span> Информация о Покупке Лекарств</a>
					<a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_statement/main" class="list-group-item">
						<span class="fa fa-file-alt" aria-hidden="true"></span> Выписка о Покупке Лекарств </a>
					<a href="<?php echo base_url(); ?>ShowForm/supplier_payment/main" class="list-group-item">
						<span class="fa fa-truck-moving" aria-hidden="true"></span> Оплата Поставщикам</a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Информация о Покупке Лекарств</h3>
					</div>

					<div class="panel-body">
						<!-- /.Panel End -->
						<div class="row">
							<div class="col-md-12">
								<?php echo form_open_multipart('Insert/medicine_purchase_info'); ?>
								<div class="box-body">
									<div class="form-group" style="width: 400px;">
										<label for="medicine_name">Название Лекарства</label>
										<input type="text" class="form-control" id="medicine_name" placeholder="" name="medicine_name">
									</div>
									<div class="form-group" style="width: 400px;">
										<label for="purchase_quantity">Количество Покупки</label>
										<input type="number" class="form-control" id="purchase_quantity" placeholder="" name="purchase_quantity">
									</div>
									<div class="form-group" style="width: 400px;">
										<label for="purchase_price">Цена Покупки</label>
										<input type="number" class="form-control" id="purchase_price" placeholder="" name="purchase_price">
									</div>
									<div class="form-group" style="width: 400px;">
										<label for="supplier_name">Имя Поставщика</label>
										<input type="text" class="form-control" id="supplier_name" placeholder="" name="supplier_name">
									</div>
								</div>
								<div class="box-footer">
									<button type="submit" class="pull-left btn btn-primary">Создать</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div><!-- /.Panel End -->
				<!-- /.Panel 2nd -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Список Покупок Лекарств</h3>
					</div>
					<div class="panel-body">
						<div class="panel-body">
							<table class="table table-striped table-bordered table-hover">
								<thead>
								<tr>
									<th style="text-align: center;">#</th>
									<th style="text-align: center;">Название Лекарства</th>
									<th style="text-align: center;">Количество</th>
									<th style="text-align: center;">Цена</th>
									<th style="text-align: center;">Имя Поставщика</th>
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
										<td style="text-align: center;"><?php echo $single_value->medicine_name; ?></td>
										<td style="text-align: center;"><?php echo $single_value->purchase_quantity; ?></td>
										<td style="text-align: center;"><?php echo $single_value->purchase_price; ?></td>
										<td style="text-align: center;"><?php echo $single_value->supplier_name; ?></td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-primary"
											   href="<?php echo base_url(); ?>Edit/medicine_purchase_info/<?php echo $single_value->purchase_id; ?>">Редактировать
											</a>
											<a style="margin: 5px;" class="btn btn-danger"
											   href="<?php echo base_url(); ?>Delete/medicine_purchase_info/<?php echo $single_value->purchase_id; ?>">Удалить
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
