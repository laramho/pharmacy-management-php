<!-- /.Breadcrumb -->
<!-- /.container -->
<section id="main">
	<div class="container">
		<div class="col-md-9" >
			<div class="panel panel-default">
				<div class="panel-heading main-color-bg">
					<h3 class="panel-title">Счет на продажу лекарства</h3>
				</div>

				<div class="panel-body">
					<div class="box-header" style="color: black; text-align: center;">
						<p style="padding: 5px; text-align: left;">
							<button id="print_button" title="Нажмите для печати" type="button"
								onClick="window.print()" class="btn btn-flat fa fa-print">Печать</button>
						</p>
					</div>
					<div class="row">
						<div class="form-group col-xs-4 col-xs-12"><b>Номер счета: </b> <?php echo $invoice; ?></div>
						<div class="form-group col-xs-5 col-xs-12"><b>Email клиента:</b> <?php echo $email; ?></div>
						<div class="form-group col-xs-3 col-xs-12"><b>Дата:</b> <?php echo $date; ?></div>
						<div class="form-group col-xs-12 col-xs-12"><b>Название и цена лекарства:</b> <?php echo $medicine_name; ?><br><br></div>

						<div class="form-group col-xs-3 col-xs-12"><b>Сумма:</b> $<?php echo $amount; ?></div>
						<div class="form-group col-xs-3 col-xs-12"><b>Скидка:</b> $<?php echo $discount; ?></div>
						<div class="form-group col-xs-3 col-xs-12"><b>Подитог:</b> $<?php echo $sub_total; ?></div>
						<div class="form-group col-xs-3 col-xs-12"><b>Оплаченная сумма:</b> $<?php echo $pay; ?></div>
					</div>
					<!-- /.Panel End -->
				</div>
			</div><!-- /.Panel End -->
		</div>
		<!-- /.Panel 2nd -->
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

		#no_print1, #no_print2, #no_print3, #no_print4 {
			display: none;
		}
	}
</style>
