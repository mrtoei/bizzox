<?php
$this->load->view('header');
$this->load->view('menu');
$url = base_url();
$country_code = array("CN","JP","LA","MY","TH");
?>
<link rel="stylesheet" type = "text/css"  href="<?php echo base_url('assets/css/customer.css')?>">
<form action="" method="post">
<div class="container">
	<div class="row">
		<div class="col">
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col" colspan="2">Add Customer</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row" class="w-25">Firstname</th>
						<td class="w-75">
							<input type="text" class="form-control" name="first_name" value="<?=set_value('first_name')?>"/>
							<span class="form_error"><?php echo form_error('first_name'); ?></span>
						</td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Lastname</th>
						<td class="w-75">
							<input type="text" class="form-control" name="last_name" value="<?=set_value('last_name')?>"/>
							<span class="form_error"><?php echo form_error('last_name'); ?></span>
						</td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Gender</th>
						<td class="w-75">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" value="M" <?php echo  set_radio('gender', 'M');?> >
								<label class="form-check-label" for="inlineRadio1">Male</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" value="F" <?php echo  set_radio('gender', 'F');?> >
								<label class="form-check-label" for="inlineRadio2">female</label>
							</div>
						</td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Phone</th>
						<td class="w-75"><input type="text" class="form-control" name="phone" value="<?=set_value('phone')?>"/></td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Fax</th>
						<td class="w-75"><input type="text" class="form-control" name="fax" value="<?=set_value('fax')?>"/></td>
					</tr>
					<tr>
						<th scope="row" class="w-25">Country</th>
						<td class="w-75">
							<!-- <input type="text" class="form-control" name="country_code" value="<?=set_value('country_code')?>"/> -->
							<select class="form-control" name="country_code" value="<?=set_value('country_code')?>">
								<option value=""> </option>
								<?php
									foreach ($country_code as $code) { ?>
										<option value="<?=$code?>"><?php echo $code;?></option>
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
			<button type="submit" class="btn btn-primary btn-save">Save</button>
		</div>
	</div>
</div>
</form>

<?php
$this->load->view('footer');
?>
