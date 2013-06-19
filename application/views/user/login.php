<h1>Farmer Login</h1>
<div class="row-fluid">
	<div class="span8">	
		<?php echo form::open('user/complete_login') ?>
			<div class="field">
    			<label for="farmer_email">Email</label>
			    <?php echo form::input('email','',array('id' => 'email')) ?>
			</div>
			<div class="field">
				<label for="farmer_password">Password</label>
				<?php echo form::password('password','',array('id' => 'password')) ?>
			</div>
			<div class="actions">
   	 			<?php echo form::submit('submit','Login') ?>
  			</div>
	</div>
</div>