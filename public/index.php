<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Teste REST</title>
		<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/getRest.js"></script>
		<link rel="stylesheet" href="css/default.css">
	</head>
	<body>
		<div class="rest">
			<h2>Autores</h2>
			<div id="autores">
				<table cellpadding="5" cellspacing="0" id="autor" align="center" width="95%" bgcolor="#dadada">
				</table>
			</div>
		</div>
		<div class="rest">
			<p id="cadastrado"></p>
			<form method="post" action="" style="margin-top:35px" id="cadastro" onsubmit="return false;">
				Nome:
				<input name="nome" id="nome" type="text" style="border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px; padding:3px;">
				<input type="submit" value="Enviar">
			</form>
		</div>
	</body>
</html>