<HTML>
	<HEAD>
		<TITLE>exosql</TITLE>
		<link rel="stylesheet" type="text/css" href="test.css">
	</HEAD>
	<BODY>
		<div>
			<h3>Se connecter</h3>
			<form action="index.php" method="post">
				<p>Votre mail : <input type="text" name="login" /></p>
				<p>Votre Mot de Passe : <input type="password" name="passwd" /></p>
				<p><input type="submit" value="OK"></p>
			</form>
		</div>
		<div>
			<h3>S'inscrire</h3><br />
			<form action="create.php" method="post">
				<p>E-mail : <input type="text" name="account" /></p>
				<p>Mot de Passe : <input type="password" name="password" /></p>
				<p><input type="submit" value="OK"></p>
			</form>
		</div>
	</BODY>
</HTML>
