<table class="table table-product">
	<tbody>
		<tr>
			<th scope="row" >Name<span class="mark-start">*</span></th>
			<td>
				<?php echo $product->name?>
			</td>
		</tr>
		<tr>
			<th scope="row">Description<span class="mark-start">*</span></th>
			<td>
				<?php echo $product->description?>
			</td>
		</tr>
		<tr>
			<th scope="row">Price Normal<span class="mark-start">*</span></th>
			<td><?php echo $product->price_normal?></td>	
		</tr>
		<tr>
			<th scope="row">Price Sale</th>
			<td><?php echo $product->price_sale?></td>
		</tr>
	</tbody>
</table>

