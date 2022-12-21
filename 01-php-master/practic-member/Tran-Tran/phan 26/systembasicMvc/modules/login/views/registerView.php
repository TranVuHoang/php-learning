<?php get_header() ?> 
<div id="content">		 
	<h1>Register</h1> 
	<?php
	if(isset($result_add)){
		echo "<p class=success>{$result_add}</p>"; ?>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#username, #password, #fullname, #email").each(function() {
					this.value = '';
				});
				$("#gender").prop('selectedIndex',0);
			});
		</script>
	<?php } ?>
	<form action="" method="POST" id="form-reg" accept-charset="utf-8">
		<div class="form-group">
			<label for="fullname">Fullname: </label>
			<input type="text" name="fullname" placeholder="fullname" id="fullname" value="<?php echo set_value('fullname') ?>">
			<?php echo form_error('fullname'); ?>
		</div>

		<div class="form-group">
			<label for="username">Username: </label>
			<input type="text" name="username" placeholder="username" id="username" value="<?php echo set_value('username') ?>">
			<?php echo form_error('username'); ?>
		</div>
		<div class="form-group">
			<label for="password">password: </label>
			<input type="password" name="password" placeholder="password" id="password" value="<?php echo set_value('password') ?>">
			<?php echo form_error('password'); ?>
		</div>
		<div class="form-group">
			<div class="form-group">
				<label for="re-password">re-password: </label>
				<input type="password" name="re_password" placeholder="re-password" id="re-password">
				<?php echo form_error('re_password'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="email">email: </label>
			<input type="email" name="email" placeholder="email" id="email" value="<?php echo set_value('email') ?>">
		</div>		
		<div class="form-group">
			<select name="gender" id="gender">
				<option value="">------ Giới tính -------</option>
				<option <?php select_gender('gender', 'male') ?> value="male">Nam</option>
				<option <?php select_gender('gender', 'female') ?> value="female">Nữ</option>
			</select>			
			<?php echo form_error('gender') ?>
		</div>
		<input type="submit" name="btn_reg" value="Đăng ký" id="btn-reg">

	</form>
</div>

<?php get_footer() ?>