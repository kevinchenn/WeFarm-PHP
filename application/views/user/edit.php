<h1>Editing farmer</h1>
<?php echo form::open('user/update') ?>

 <p>
    <b>Name:</b>
    <? echo $name; ?>
  </p>

<p>
    <b>Email:</b>
    <? echo $email; ?>
</p>

  <div class="field">
    <label for="farmer_farm">Farm</label>
    <?php echo form::input('farm',$farm,array('id' => 'farm')) ?>
  </div>
  <div class="field">
    <label for="farmer_produce">Produce</label>
    <?php echo form::input('produce',$produce,array('id' => 'produce')) ?>
  </div>
  <div class="field">
    <label for="farmer_produce_price">Produce price</label>
    <?php echo form::input('price',$price,array('id' => 'price')) ?>
  </div>
  <div class="actions">
    <?php echo form::submit('submit','Update Farmer') ?>
  </div>
</form>

<a href="/wefarm_php/">Back</a>