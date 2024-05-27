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
			<li><a href="#">Создать Опцию</a></li>
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
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Создать Опцию</a>
					<a href="<?php echo base_url(); ?>ShowForm/create_medicine_presentation/main" class="list-group-item">
						<span class="fa fa-capsules" aria-hidden="true"></span> Презентация Лекарств</a>
					<a href="<?php echo base_url(); ?>ShowForm/create_generic_name/main" class="list-group-item">
						<span class="fa fa-plus-circle" aria-hidden="true"></span> Общее Название </a>
					<a href="<?php echo base_url(); ?>ShowForm/create_medicine_name/main" class="list-group-item">
						<span class="fa fa-pills" aria-hidden="true"></span> Название Лекарства</a>
					<a href="<?php echo base_url(); ?>ShowForm/create_supplier/main" class="list-group-item">
						<span class="fa fa-truck-moving" aria-hidden="true"></span> Поставщик</a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Создать Название Лекарства</h3>
					</div>

					<div class="panel-body">
						<!-- /.Panel End -->
						<div class="row">
							<div class="col-md-3">
								<?php echo form_open_multipart('Insert/medicine_name'); ?>
								<div class="box-body">
									<div class="form-group" style="width: 400px;">
										<label for="medicine_name">Название Лекарства</label>
										<input type="text" class="form-control" id="medicine_name" placeholder="" name="medicine_name">
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
						<h3 class="panel-title">Список Названий Лекарств</h3>
					</div>
					<div class="panel-body">
						<div class="panel-body">
							<table class="table table-striped table-bordered table-hover">
								<thead>
								<tr>
									<th style="text-align: center;">#</th>
									<th style="text-align: center;">Название Лекарства</th>
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
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger"
											   href="<?php echo base_url(); ?>Delete/medicine_name/<?php echo $single_value->record_id; ?>">Удалить
											</a>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->
</section>
