
<?php
$this->load->view('header');
$this->load->view('menu');
?>
<link rel="stylesheet" type = "text/css"  href="<?php echo base_url('assets/css/product.css')?>">
<title>Products</title>
<script>
	$(document).ready(function(){
		$('#form').submit(function(e){
			e.preventDefault();
			var action = $('#btn-action').val()
			var formdata = $(this).serialize()
			if(formValidation()===true){
				if(action == 'save'){
					saveProduct(formdata)
				}else if(action == 'update'){
					updateProduct(formdata)
				}
			}
		})

		function saveProduct(formdata){
			$.ajax({
				type: "post",
				url: "<?=base_url('product/insertProduct')?>",
				data: formdata,
				dataType:'json',
				success: function (response) {
					if(response.status==200){
						detailProduct(response.id)
					}
				}
			});
		}

		function updateProduct(formdata){
			$.ajax({
				type: "post",
				url: "<?=base_url('product/updateProduct')?>",
				data: formdata,
				dataType:'json',
				success: function (response) {
					if(response.status==200){
						detailProduct(response.id)
					}
				}
			});
		}

		function detailProduct(id){
			$.ajax({
				type: "post",
				url: "<?=base_url('product/detailProduct')?>",
				data: {id:id},
				success: function (data) {
					$('#modal-title').html('Detail Product')
					$('#modal-body').html(data)
					// document.getElementById("btn-action").style.display = "none";
					$('#btn-action').hide()
				}
			});
		}

		function formValidation(){
			var name = $('#name').val()
			var description = $('#description').val()
			var price_normal = $('#price_normal').val()
			if(name==null||name==''){
				alert('Input name please')
				return false
			}
			if(description==null||description==''){
				alert('Input description please')
				return false
			}
			if(price_normal==null||price_normal==''){
				alert('Input price normal please')
				return false
			}

			if(name!=null && description!=null && price_normal!=null){
				return true
			}

		}
		
	})
	function formProduct(){
		$.ajax({
			type: "get",
			url: "<?=base_url('product/formProduct')?>",
			success: function (data) {
				$('#myModal').modal('show')
				$('#modal-title').html('Add Product')
				$('#modal-body').html(data)
				$('#btn-action').html('Save')
				$('#btn-action').val('save')
			}
		});
	}
	function viewProduct(id){
		$.ajax({
			type: "post",
			url: "<?=base_url('product/detailProduct')?>",
			data: {id:id},
			success: function (data) {
				$('#myModal').modal('show')
				$('#btn-action').show()
				$('#modal-title').html('Detail Product')
				$('#modal-body').html(data)
				$('#btn-action').html('Update')
				$('#btn-action').val('update')
			}
		});
	}
	function editProduct(id){
		$.ajax({
			type: "post",
			url: "<?=base_url('product/editProduct')?>",
			data: {id:id},
			success: function (data) {
				$('#myModal').modal('show')
				$('#btn-action').show()
				$('#modal-title').html('Edit Product')
				$('#modal-body').html(data)
				$('#btn-action').html('Update')
				$('#btn-action').val('update')
			}
		});
	}

	function deleteProduct(id){
		var confirm_delete = confirm("Confirm delete product");
		if (confirm_delete == true) {
			$.ajax({
				type: "post",
				url: "<?=base_url('product/deleteProduct')?>",
				data: {id:id},
				success: function (response) {
					if(response.status==200){
						location.reload();
					}
				}
			});
		}
		
	}
		
</script>

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h2>Products</h2>
		</div>
		<div class="col-md-2">
			<button class="btn btn-primary" onclick="formProduct()"><i class="fas fa-plus-circle"></i> Product</button>
		</div>
	</div>
	<div class="row">
		<div class="col">
		<table class="table">
				<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Description</th>
						<th scope="col">Price Normal</th>
						<th scope="col">Price Sale</th>
						<th scope="col">View</th>
						<th scope="col">Edit</th>
						<th scope="col">Delete</th>
					</tr>
				</thead>
				<tbody>
				<?php
				if(count($products)>0) {
					foreach ($products as $product) {
						$id = $product['id'];
						?>
						<tr>
							<td><?=$product['name']?></td>
							<td><?=$product['description']?></td>
							<td><?=$product['price_normal']?></td>
							<td><?=$product['price_sale']?></td>
							<td>
								<a href="#" onclick="viewProduct(<?=$id?>)"><i class="fas fa-eye"></i></a>
							</td>
							<td>
								<a href="#" onclick="editProduct(<?=$id?>)"><i class="fas fa-pen"></i></a>
							</td>
							<td>
								<a href="#" onclick="deleteProduct(<?=$id?>)"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
					<?php
					}
				}else{?>
						<tr>
							<td colspan="10" style="text-align: center;">No Data</td>
						</tr>
				<?php 
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<?php
			if(count($products)>0) {
			 	echo $pagination;
			}
			?>
		</div>
	</div>
</div>

<form  id="form" method="post">
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btn-action">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
<?php
$this->load->view('footer');
?>
