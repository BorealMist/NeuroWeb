<!DOCTYPE html>
<html lang="en">
<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba TFG</title>
</head>
<body>
    <h1>Hola buenas a ver cómo furrula el PHP</h1>
    <form action="">

    </form>
    <?php

    ?>
</body>
</html>