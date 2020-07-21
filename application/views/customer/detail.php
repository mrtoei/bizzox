<?php
$this->load->view('header');
$this->load->view('menu');
$url = base_url();

?>

<div class="container">
	<div class="row">
		<div class="col">
			<?php
			$action = $this->input->get('action');
			// echo $action;
			$msg = '';
			if($action=='insert'){
				$msg ='Inserted customer success';
			}else if($action=='update'){
				$msg ='Updated customer success';
			}
			?>

			<?php if($action){ ?>
			<div class="alert alert-success" role="alert">
				<?php echo $msg; ?>
			</div>
			<?php } ?>
			
		</div>
	</div>
	<div class="row">
		<div class="col">
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col" colspan="2">Detail Customer</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row" class="w-25">Firstname</th>
						<td class="w-75"><?php echo $customer->first_name?></td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Lastname</th>
						<td class="w-75"><?php echo $customer->last_name?></td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Gender</th>
						<td class="w-75"><?php echo $customer->gender == 'M' ? 'Male' : 'Female' ?></td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Phone</th>
						<td class="w-75"><?php echo $customer->phone?></td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Fax</th>
						<td class="w-75"><?php echo $customer->fax?></td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Email</th>
						<td class="w-75"><?php echo $customer->email?></td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Country</th>
						<td class="w-75"><?php echo $customer->country_code?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<a href="<?=base_url("customer/edit?id=$customer->id")?>" class="btn btn-success">Edit</a>
			<a href="<?=base_url("customer/delete?id=$customer->id")?>" onclick="return confirm('Confirm Delete ?');" class="btn btn-danger">Delete</a>

		</div>
	</div>
</div>


<?php
$this->load->view('footer');
?>
