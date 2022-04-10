<?php
	include 'libs/functions.php';
    include 'libs/bootstrap.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hospedajes</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/classes.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <?php
            bootstrap();
        ?>
        
		<script type="text/javascript" src="js/script.js?random='<?php echo rand( );?>'"></script>
	</head>
	<body>
        <div class="container-fluid main">
            <div class="container">
                <h2>Hospedajes</h2>
            </div>
            <div class="container">
                <h4>Busca tu hotel o apartamento</h4>
                <input type="text" id="inputSugerencias" placeholder="Buscar">
            </div>
            <div class="container">
                <h6>Sugerencias</h6>
                <div id="sugerenciasContainer" class="container-fluid"></div>
            </div>
        </div>
	</body>
</html>