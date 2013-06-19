<!DOCTYPE html>
<html>
<head>
    <title>WeFarm</title>
    <?php echo HTML::style("content/css/bootstrap.css"); ?>
    <?php echo HTML::style("content/css/bootstrap-responsive.css"); ?>
</head>
   <?php echo $header ?>
<div class="container">
    <? echo $content ?>
    <?  if (!empty($table)){
            echo "<h3>Our farmers</h3>
            <table class='table table-striped table-bordered'>
                <tr>
                <th>Farmer</th>    
                <th>Farm</th>
                <th>Produce</th>
                <th>Produce price</th>
            </tr>";
            foreach ($table as $farmer){
                echo '<tr>';
                echo '<td><a href='.'user/account/'.$farmer->id.'>'.$farmer->name.'</td>';
                echo '<td><a href='.'user/account/'.$farmer->id.'>'.$farmer->farm.'</td>';
                echo '<td>'.$farmer->produce.'</td>';
                echo '<td>$'.number_format($farmer->produce_price,2).'</td>';
            }

            echo '</table>';
        }
    ?>
</div>

</body>
</html>