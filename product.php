<?php 
	
	include_once 'config.php';

	$str = $_POST['str'];
	$stmt = $con->prepare('select * from product where name like "%'. $str .'%"');

	$stmt -> execute();

	while ($row = $stmt->fetch()) { 
		?>

		<div class="mysearch">
			<img class="img-fluid rounded float-left" src="<?php echo 'img/' . $row['pro_image'];?>" id="pic" />
			<span><?php echo $row['name']; ?></span>
			<p><?php echo $row['price'].' $'; ?></p>
		</div>

	<?php }; ?>