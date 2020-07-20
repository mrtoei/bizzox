<?php
$this->load->view('header');
$this->load->view('menu');
$url = base_url();
$country_code = array("CN","JP","LA","MY","TH");
?>
<form action="<?=base_url("customer/update")?>" method="post">
<div class="container">
	<div class="row">
		<div class="col">
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col" colspan="2">Edit Customer</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row" class="w-25">Firstname</th>
						<td class="w-75"><input type="text" class="form-control" name="first_name" value="<?php echo $customer->first_name?>"/></td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Lastname</th>
						<td class="w-75"><input type="text" class="form-control" name="last_name" value="<?php echo $customer->last_name?>"/></td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Gender</th>
						<td class="w-75">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" value="M"<?php echo $customer->gender == 'M' ? 'checked' : '' ?> >
								<label class="form-check-label" for="inlineRadio1">Male</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" value="F" <?php echo $customer->gender == 'F' ? 'checked' : 'Female' ?>>
								<label class="form-check-label" for="inlineRadio2">female</label>
							</div>
						</td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Phone</th>
						<td class="w-75"><input type="text" class="form-control" name="phone" value="<?php echo $customer->phone?>"/></td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Fax</th>
						<td class="w-75"><input type="text" class="form-control" name="fax" value="<?php echo $customer->fax?>"/></td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Email</th>
						<td class="w-75"><input type="text" class="form-control" name="email" value="<?php echo $customer->email?>"/></td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Country</th>
						<!-- <td class="w-75"><input type="text" class="form-control" name="country_code" value="<?php echo $customer->country_code?>"/></td> -->
						<td class="w-75">
							<select class="form-control" name="country_code" value="<?=set_value('country_code')?>">
								<option value=""> </option>
								<?php
									foreach ($country_code as $code) { ?>
										<option value="<?=$code?>" <?php echo $code== $customer->country_code ? "selected='selected'":""?>><?php echo $code;?></option>
									<?php
									}
								?>
							</select>
						</td>
						
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<input type="hidden" name="id" value="<?php echo $customer->id;?>">
			<button type="submit" class="btn btn-info">update</button>
			<a href="<?=base_url("delete?id=$customer->id")?>" onclick="return confirm('Confirm Delete ?');" class="btn btn-danger">Delete</a>
		</div>
	</div>
</div>
</form>

<?php
$this->load->view('footer');
?>
