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
	<div class="container" id="no_print2">
		<ol class="breadcrumb">
			<li><a href="#">Продажи / Продажа Лекарств</a></li>
			<li class="active"><?php echo $msg; ?></li>
		</ol>
	</div>
</section>

<!-- /.container -->
<section id="main">
	<div class="container">
		<div class="row">
			<div class="col-md-3" id="no_print3">
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
			<div class="col-md-9" id="full_page">
				<div class="panel panel-default" id="no_print1">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Продажа Лекарств</h3>
					</div>
					<div class="panel-body">
						<!-- /.Panel End -->
						<div class="box-body">
							<div class="row">
								<div class="col-sm-2">
									<label for="date">Дата</label>
									<input type="text" class="form-control datepicker"
										   placeholder="Введите дату" name="date" id="date" value="<?php echo date('Y-m-d'); ?>"
										   autocomplete="off">
								</div>
								<div class="col-sm-3">
									<label for="customer_name">Email клиента</label>
									<input type="email" class="form-control"
										   placeholder="Введите email" name="customer_email" id="customer_email"
										   autocomplete="off" required>
								</div>
								<div class="col-sm-7">
									<label for="medicine_name">Название Лекарства</label>
									<select name="medicine_name" id="medicine_name" class="form-control selectpicker"
											data-live-search="true">
										<option value="">-- Выберите --</option>
										<?php foreach ($all_value as $info) {
											if ($info->medicine_name != '') {
											?>
											<option value="<?php echo $info->medicine_name_id . "###" . $info->medicine_name . "###" . $info->generic_name . "###" . $info->medicine_presentation; ?>">
												<?php echo $info->medicine_name . " - " . $info->generic_name . " - " . $info->unit . " [ " . $info->medicine_presentation . " - " . $info->qty . " ]"; ?>
											</option>
										<?php }} ?>
									</select>
								</div>
								<div class="col-sm-4">
									<label for="qty">Количество</label>
									<input type="number" class="form-control" id="qty" name="qty" value="0" autocomplete="off">
								</div>

								<div class="col-sm-4">
									<label for="unit_sales_price">Цена продажи</label>
									<input type="number" class="form-control" id="unit_sales_price" placeholder="$"
										   name="unit_sales_price" readonly>
								</div>

								<div class="col-sm-4">
									<label for="purchase_price">Общая сумма</label>
									<input type="number" class="form-control" id="purchase_price" placeholder="$"
										   name="purchase_price" readonly>
								</div>

								<div class="col-sm-4" style="margin-top: 25px;">
									<button type="button" class="pull-left btn btn-primary" id="add_item">Добавить</button>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.Panel End -->
			</div>
			<!-- /.Panel 2nd -->
			<div class="col-md-12" id="no_print4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Продажа Лекарств</h3>
					</div>

					<table id="salesList" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th style="text-align: center;">Дата</th>
							<th style="text-align: center;">Лекарство</th>
							<th style="text-align: center;">Цена за единицу</th>
							<th style="text-align: center;">Количество</th>
							<th style="text-align: center;">Сумма</th>
							<th style="text-align: left;">Действие</th>
						</tr>
						</thead>
						<tbody id="show_all_sales">

						</tbody>
						<tr>
							<td colspan="">
								Сумма<input type="text" class="form-control" id="amount"
											 style="color: black; border: black 2px solid;"
											 value="0" name="amount" readonly>
							</td>
							<td colspan="">
								Скидка<input type="number" class="form-control" id="discount"
											   style="color: black; border: black 2px solid;"
											   value="0" placeholder="Скидка" name="discount">
							</td>
							<td colspan="2">
								Подитог<input type="text" class="form-control" id="sub_total"
												value="0" style="color: black; border: black 2px solid;"
												name="sub_total" readonly>
							</td>
							<td colspan="2">
								Оплаченная сумма<input type="number" class="form-control" id="pay"
										  value="0" style="color: black; border: black 2px solid;" name="pay">
							</td>
							<td colspan="2">
								<div style="margin-top: 20px;color: #a61717;">
								<button style="" type="button" class="btn btn-success"
										id="sell_btn">Продать</button>
								</div>
							</td>
						</tr>
					</table>

				</div>
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->
</section>


<script type="text/javascript">
	$("#medicine_name").on("change paste keyup", function () {
		var medicine = $('#medicine_name').val().split("###");
		var medicine_name_id = medicine[0];
		var medicine_name = medicine[1];
		var post_data = {
			'medicine_name': medicine_name, 'medicine_name_id': medicine_name_id,
			'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
		};

		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>Get_ajax_value/get_medicine_price",
			data: post_data,
			success: function (data) {
				$('#unit_sales_price').val(data);
			}
		});
	});  // Цена лекарства
	// расчёт суммы
	$("#qty").on("change paste keyup", function () {
		var unit_sales_price = $('#unit_sales_price').val();
		var qty = $('#qty').val();
		var total = parseFloat(unit_sales_price) * parseFloat(qty);
		$('#purchase_price').val(total);
	});

	// ДОБАВИТЬ ЛЕКАРСТВО
	var complete_total = 0;
	var all_purchase = new Array();
	var product_count = 0;
	$("#add_item").click(function () {
		var date = $('#date').val();
		var customer_email = $('#customer_email').val();
		var medicine = $('#medicine_name').val().split("###");
		var medicine_name_id = medicine[0];
		var medicine_name = medicine[1];
		var generic_name = medicine[2];
		var medicine_presentation = medicine[3];
		var unit_sales_price = $('#unit_sales_price').val();
		var qty = $('#qty').val();
		var purchase_price = $('#purchase_price').val();
		all_purchase[product_count] = new Array(date, medicine_name, unit_sales_price, qty, purchase_price,
			medicine_name_id, generic_name, medicine_presentation, customer_email);
		var full_table = "";
		var test_total = 0;
		for (var i = 0; i < all_purchase.length; i++) {
			test_total += Number(all_purchase[i][4]);
			full_table += "<tr>";
			for (var j = 0; j < all_purchase[i].length - 4; j++) {
				full_table += "<td style='text-align: center;'>" + all_purchase[i][j] + "</td>";
			}
			full_table += "<td><button class='btn btn-danger' onclick='delete_data(" + i + ")'>Удалить</button></td></tr>";
		}
		$('#show_all_sales').html(full_table);
		$('#unit_sales_price').val('');
		$('#qty').val('0');
		$('#medicine_name').val('');
		$('#purchase_price').val('');
		product_count++;
		complete_total = test_total;
		calculation();
	});
	// УДАЛЕНИЕ ДОБАВЛЕННОГО ЛЕКАРСТВА
	function delete_data(arr_no) {
		all_purchase.splice(arr_no, 1);
		var full_table = "";
		var test_total = 0;
		for (var i = 0; i < all_purchase.length; i++) {
			test_total += Number(all_purchase[i][5]);
			full_table += "<tr>";
			for (var j = 0; j < all_purchase[i].length - 4; j++) {
				full_table += "<td style='text-align: center;'>" + all_purchase[i][j] + "</td>";
			}
			full_table += "<td><button class='btn btn-danger' onclick='delete_data(" + i + ")'>Удалить</button></td></tr>";
		}
		$('#show_all_sales').html(full_table)

		product_count--;
		console.log(all_purchase);
		complete_total = test_total;
		calculation();
	}

	$("#discount, #pay").on("change paste keyup", function () {
		calculation();
	});
	function calculation() {
		$('#amount').val(complete_total);
		var discount = $('#discount').val();
		if (discount == "") {
			discount = 0;
		}
		$('#sub_total').val(Number(complete_total - discount));
		var pay = $('#pay').val();
		if (pay == "") {
			pay = 0;
		}
		var after_pay = Number(complete_total - discount - pay);
		if (after_pay >= 0) {
			$('#due').val(after_pay);
		}
	}
	$("#sell_btn").click(function () {
		var amount = $('#amount').val();
		var discount = $('#discount').val();
		var sub_total = $('#sub_total').val();
		var pay = $('#pay').val();
		var due = $('#due').val();
		if (pay == 0 || pay < 0) {
			alert("Невозможно продать");
		} else {
			var post_data = {
				'amount': amount, 'discount': discount, 'sub_total': sub_total, 'pay': pay, 'due': due,
				'all_purchase': all_purchase
			};
			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>Get_ajax_value/sales_confirm",
				data: post_data,
				success: function (data) {
					$('#full_page').html(data);
				}
			});
		}
	});
</script>
