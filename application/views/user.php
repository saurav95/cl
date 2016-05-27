<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>OK DOne</h1>
	<ul>
		
	<?php 
	
	 foreach($users as $a) {
	?>	 
		<li><?php echo strtoupper($a->firstname); ?> <?php echo $a->lastname ?></li>
	
	<?php 
	}
	
	?>
	</ul> 
</body>
</html>