<?php
/**
 * Created by PhpStorm.
 * User: bmmah
 * Date: 3/26/2019
 * Time: 12:22 PM
 */

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
	<div class="container" id="no_print1">
		<ol class="breadcrumb">
			<li><a href="#">Продажи / Отчет о продажах</a></li>
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
					<a href="index.html" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Продажи</a>
					<a href="<?php echo base_url(); ?>ShowForm/sell_medicine/main"
					   class="list-group-item">
						<span class="fa fa-capsules" aria-hidden="true"></span> Продажа Лекарств</a>
					<a href="<?php echo base_url(); ?>ShowForm/sell_statement/main"
					   class="list-group-item">
						<span class="fa fa-capsules" aria-hidden="true"></span> Отчет о Продажах</a>
				</div>
			</div>
			<div class="col-md-9" id="no_print3">
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Отчет о продажах</h3>
					</div>

					<div class="panel-body">
						<!-- /.Panel End -->
						<div class="box-body">
							<div class="row">
								<div class="col-sm-6">
									<label for="date_from">Дата с</label>
									<input type="date" class="form-control datepicker"
										   placeholder="Введите дату" name="date_from" id="date_from"
										   autocomplete="off">
								</div>
								<div class="col-sm-6">
									<label for="date_to">Дата по</label>
									<input type="date" class="form-control datepicker"
										   placeholder="Введите дату" name="date_to" id="date_to"
										   autocomplete="off">
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4" style="margin-top: 17px;">
									<button type="button" class="pull-left btn btn-primary" id="search_purchase">Поиск</button>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.Panel End -->
			</div>
			<!-- /.Panel 2nd -->
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Отчет о продажах</h3>
					</div>
					<div class="panel-body" id="show_purchase">
					</div>
				</div>
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->
</section>

<script type="text/javascript">
	$("#search_purchase").click(function () {
		var date_from = $('#date_from').val();
		var date_to = $('#date_to').val();
		var medicine_name = $('#medicine_name').val();
		var post_data = {
			'date_from': date_from, 'date_to': date_to, 'medicine_name': medicine_name
		};
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>Get_ajax_value/get_sales_statement",
			data: post_data,
			success: function (data) {
				$('#show_purchase').html(data);
			}
		});
	});
</script>

<style>
	@media print {
		a[href]:after {
			content: none !important;
		}

		#print_button {
			display: none;
		}

		#no_print1, #no_print2, #no_print3, #no_print4 {
			display: none;
		}
	}
</style>
