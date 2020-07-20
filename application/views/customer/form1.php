<?php
$this->load->view('header');
$this->load->view('menu');
$url = base_url();

?>
<link rel="stylesheet" type = "text/css"  href="<?php echo base_url('assets/css/customer.css')?>">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Add Customer</h2>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form action="" method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Firstname<span class="mark-start">*</span></label>
						<input type="text" class="form-control" name="first_name" value="<?=set_value('first_name')?>"/>
						<span class="form_error"><?php echo form_error('first_name'); ?></span>
					</div>
					<div class="form-group col-md-6">
						<label>Lastname<span class="mark-start">*</span></label>
						<input type="text" class="form-control" name="last_name" value="<?=set_value('last_name')?>"/>
						<span class="form_error"><?php echo form_error('last_name'); ?></span>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-2">
						<label>Gender</label><br/>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" value="M" <?php echo  set_radio('gender', 'M');?> >
							<label class="form-check-label" for="inlineRadio1">Male</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" value="F" <?php echo  set_radio('gender', 'F');?>>
							<label class="form-check-label" for="inlineRadio2">female</label>
						</div>
					</div>
					<div class="form-group col-md-5">
						<label>Phone</label>
						<input type="text" class="form-control"name="phone" value="<?=set_value('phone')?>">
					</div>
					<div class="form-group col-md-5">
						<label>Fax</label>
						<input type="text" class="form-control"  name="fax" value="<?=set_value('fax')?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Email</label>
						<input type="text" class="form-control"  name="email" value="<?=set_value('email')?>">
					</div>
					<div class="form-group col-md-6">
						<label>Country</label>
						<input type="text" class="form-control" name="country_code" value="<?=set_value('country_code')?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12 ">
						<button type="submit" class="btn btn-primary btn-save">Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
$this->load->view('footer');
?>
