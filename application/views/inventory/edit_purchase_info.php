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
			<li><a href="#">Редактировать Информацию о Покупке</a></li>
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
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Редактировать Информацию о Покупке</a>
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
						<h3 class="panel-title">Редактировать Информацию о Покупке</h3>
					</div>

					<div class="panel-body">
						<!-- /.Panel End -->
						<div class="row">
							<div class="col-md-12">
								<?php echo form_open_multipart('Update/medicine_purchase_info/'.$one_value[0]->purchase_id); ?>
								<div class="box-body">
									<div class="form-group" style="width: 400px;">
										<label for="medicine_name">Название Лекарства</label>
										<input type="text" class="form-control" id="medicine_name" value="<?php echo $one_value[0]->medicine_name; ?>" name="medicine_name">
									</div>
									<div class="form-group" style="width: 400px;">
										<label for="purchase_quantity">Количество Покупки</label>
										<input type="number" class="form-control" id="purchase_quantity" value="<?php echo $one_value[0]->purchase_quantity; ?>" name="purchase_quantity">
									</div>
									<div class="form-group" style="width: 400px;">
										<label for="purchase_price">Цена Покупки</label>
										<input type="number" class="form-control" id="purchase_price" value="<?php echo $one_value[0]->purchase_price; ?>" name="purchase_price">
									</div>
									<div class="form-group" style="width: 400px;">
										<label for="supplier_name">Имя Поставщика</label>
										<input type="text" class="form-control" id="supplier_name" value="<?php echo $one_value[0]->supplier_name; ?>" name="supplier_name">
									</div>
								</div>
								<div class="box-footer">
									<button type="submit" class="pull-left btn btn-primary">Сохранить Изменения</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div><!-- /.Panel End -->
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->
</section>
