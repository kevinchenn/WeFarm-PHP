<h1>New farmer registration</h1>
<?php echo form::open('user/complete_registration') ?>

  <div class="field">
    <label for="farmer_name">Name</label>
    <?php echo form::input('name','',array('id' => 'name')) ?>
  </div>
  <div class="field">
    <label for="farmer_email">Email</label>
    <?php echo form::input('email','',array('id' => 'email')) ?>
  </div>
  <div class="field">
    <label for="farmer_password">Password</label>
    <?php echo form::password('password','',array('id' => 'password')) ?>
  </div>
  <div class="field">
    <label for="farmer_farm">Farm</label>
    <?php echo form::input('farm','',array('id' => 'farm')) ?>
  </div>
  <div class="field">
    <label for="farmer_produce">Produce</label>
    <?php echo form::input('produce','',array('id' => 'produce')) ?>
  </div>
  <div class="field">
    <label for="farmer_produce_price">Produce price</label>
    <?php echo form::input('price','',array('id' => 'price')) ?>
  </div>
  <div class="actions">
    <?php echo form::submit('submit','Create Farmer') ?>
  </div>
</form>

<a href="/wefarm_php/">Back</a>