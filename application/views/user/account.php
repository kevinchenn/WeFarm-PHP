<h1 class="floatLeft"><? echo $name; ?>'s Farm</h1>
<p> <? echo $wepay ?></p>
<p>
  	<b>Name:</b>
  	<? echo $name; ?>
	</p>

<p>
  	<b>Email:</b>
  	<? echo $email; ?>
</p>

<p>
	<b>Farm:</b>
	<? echo $farm; ?>
</p>

<p>
  	<b>Produce:</b>
  	<? echo $produce; ?>
</p>

<p>
  	<b>Produce price:</b>
  	<? echo '$'.$price; ?>
</p>
	<? if ($edit){
		echo "<a href=".url::base().'/user/edit>Edit</a>';
	}
	?>
	
