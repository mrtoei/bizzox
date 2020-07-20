
<?php
$this->load->view('header');
$this->load->view('menu');
?>
<link rel="stylesheet" type = "text/css"  href="<?php echo base_url('assets/css/customer.css')?>">
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h2>Customers</h2>
		</div>
		<div class="col-md-2">
			<a href="<?= base_url('customer/form')?>" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Customer</a>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Firstname</th>
						<th scope="col">Lastname</th>
						<th scope="col">Gender</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Fax</th>
						<th scope="col">Country</th>
						<th scope="col">View</th>
						<th scope="col">Edit</th>
						<th scope="col">Delete</th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach ($customers as $customer) {
					$id = $customer['id'];
					?>
					<tr>
						<td><?=$customer['first_name']?></td>
						<td><?=$customer['last_name']?></td>
						<td><?=$customer['gender']?></td>
						<td><?=$customer['email']?></td>
						<td><?=$customer['phone']?></td>
						<td><?=$customer['fax']?></td>
						<td><?=$customer['country_code']?></td>
						<!-- <td><?=$customer['id']?></td> -->
						<td><a href="<?=base_url("customer/detail?id=$id")?>"><i class="fas fa-eye"></i></a></td>
						<td><a href="<?=base_url("customer/edit?id=$id")?>"><i class="fas fa-pen"></i></a></td>
						<td><a href="<?=base_url("customer/delete?id=$id")?>" onclick="return confirm('Confirm Delete ?');"><i class="fas fa-trash-alt"></i></a></td>
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
			<?php echo $pagination; ?>
		</div>
	</div>
	

</div>


<?php
$this->load->view('footer');
?>
