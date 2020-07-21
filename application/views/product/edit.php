<table class="table table-product">
	<tbody>
		<tr>
			<th scope="row" >Name<span class="mark-start">*</span></th>
			<td>
				<input type="text" class="form-control" name="name" id="name" value="<?php echo $product->name?>"/>
				<span id="name_error" class="form_error"></span>
			</td>
		</tr>
		<tr>
			<th scope="row">Description<span class="mark-start">*</span></th>
			<td>
				<input type="text" class="form-control" name="description" id="description" value="<?php echo $product->description?>"/>
				<span id="description_error" class="form_error"></span>
			</td>
		</tr>
		<tr>
			<th scope="row">Price Normal<span class="mark-start">*</span></th>
			<td><input type="number" class="form-control" name="price_normal" id="price_normal" value="<?php echo $product->price_normal?>" /></td>
		</tr>
		<tr>
			<th scope="row">Price Sale</th>
			<td><input type="number" class="form-control" name="price_sale" id="price_sale" value="<?php echo $product->price_sale?>"/></td>
		</tr>
	</tbody>
</table>
<input type="hidden" name="id" value="<?php echo $product->id?>">
