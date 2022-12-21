<?php get_header() ?> 
<div id="content">
	<h1>Cập nhật user</h1> 
	<?php 
	if(isset($result_update)){
		echo "<p class=success>{$result_update}</p>"; ?>		
	<?php } ?>
	<form action="" method="POST" id="form-update" accept-charset="utf-8">
		<div class="form-group">
			<label for="fullname">Fullname: </label>
			<input type="text" name="fullname" placeholder="fullname" id="fullname" value="<?php if(is_value_update('btn_update')) echo $user['fullname']; echo set_value('fullname');  ?>">
			<?php echo form_error('fullname'); ?>
		</div>

		<div class="form-group">
			<label for="username">Username: </label>
			<input disabled type="text" name="username" placeholder="username" id="username" value="<?php if(isset($user)) echo $user['username'] ?>">
		</div>
		<div class="form-group">
			<label for="password">password: </label>
			<input type="password" name="password" placeholder="password" id="password" value="<?php echo set_value('password'); ?>">
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
			<input type="email" name="email" placeholder="email" id="email" value="<?php if(is_value_update('btn_update')) echo $user['email']; echo set_value('email') ?>">
		</div>		
		<div class="form-group">
			<select name="gender" id="gender">
				<option value="">------ Giới tính -------</option>
				<option <?php  if(isset($user)) is_male('btn_update', $user['gender']); select_gender('gender', 'male') ?> value="male">Nam</option>
				<option <?php if(isset($user)) is_female('btn_update', $user['gender']); select_gender('gender', 'female') ?> value="female">Nữ</option>
			</select>			
			<?php echo form_error('gender') ?>
		</div>
		<input type="submit" name="btn_update" value="Cập nhật" id="btn-update">

	</form>
</div>

<?php get_footer() ?>