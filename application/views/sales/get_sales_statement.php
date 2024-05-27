<div class="box box-info">
	<p style="padding: 3px;">
		<button id="print_button" title="Нажмите для печати" type="button"
				onClick="window.print()" class="btn btn-flat fa fa-print">Печать
		</button>
	</p>
	<div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
		<table id="example2" class="table table-bordered table-striped table-hover">
			<thead>
			<tr>
				<th style="text-align: center;">#</th>
				<th style="text-align: center;">Дата</th>
				<th style="text-align: center;">Счет</th>
				<th style="text-align: center;">Лекарство</th>
				<th style="text-align: center;">Цена за единицу</th>
				<th style="text-align: center;">Количество</th>
				<th style="text-align: center;">Всего</th>
				<th style="text-align: center;">Сумма</th>
				<th style="text-align: center;">Скидка</th>
				<th style="text-align: center;">Общая сумма</th>
			</tr>
			</thead>
			<tbody>
			<?php
			$total_qty = 0;
			$total_price2 = 0;
			for ($i = 1; $i <= $count_it; $i++) {
				$one_time = 0;
				foreach (${"product_result" . $i} as $single_value) {
					$total_qty += $single_value->qty;
					$one_time++;
					?>
					<tr>
					<?php if ($single_value->particular != "Previous Due" && $single_value->particular != "Payment") { ?>
						<?php if ($one_time == 1) { ?>
							<td style="text-align: center;"><?php echo $i; ?></td>
							<td style="text-align: center;"><?php echo date('d/m/y', strtotime($single_value->date)); ?></td>
							<td style="text-align: center;"><?php echo $single_value->invoice; ?></td>
							<td style="text-align: center; white-space: nowrap;">
								<?php echo $single_value->medicine_name; ?>
							</td>
							<td style="text-align: center;"><?php echo '$'.$single_value->unit_sales_price; ?></td>
							<td style="text-align: center;"><?php echo $single_value->qty; ?> </td>
							<td style="text-align: center;"><?php echo '$'.$single_value->total_price; ?></td>
							<td style="text-align: center;"><?php echo '$'.$single_value->total_amount; ?></td>
							<td style="text-align: center;"><?php echo '$'.$single_value->total_discount; ?></td>
							<td style="text-align: center;"><?php echo '$'.$single_value->discount_price; ?></td>
							<?php  $total_price2 += $single_value->discount_price; ?>
							</tr>
						<?php } else { ?>
							<td style="text-align: center;"></td>
							<td style="text-align: center;"></td>
							<td style="text-align: center;"></td>
							<td style="text-align: center; white-space: nowrap;">
								<?php echo $single_value->medicine_name; ?>
							</td>
							<td style="text-align: center;"><?php echo '$'.$single_value->unit_sales_price; ?></td>
							<td style="text-align: center;"><?php echo $single_value->qty; ?> </td>
							<td style="text-align: center;"><?php echo '$'.$single_value->total_price; ?></td>
							<td style="text-align: center;"><?php echo '$'.$single_value->total_amount; ?></td>
							<td style="text-align: center;"><?php echo '$'.$single_value->total_discount; ?></td>
							<td style="text-align: center;"></td>
							</tr>
						<?php } ?>
						<?php
					}
				}
			}
			?>
			<tr style="font-weight: bolder;">
				<td style="text-align: right;" colspan="5">Всего продуктов</td>
				<td style="text-align: center;"><?php echo $total_qty; ?></td>
				<td style="text-align: center;" colspan="3"></td>
				<td style="text-align: center;">Всего продаж: <?php echo '$'.$total_price2; ?>/-</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>

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
	}
</style>
