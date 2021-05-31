<form method="POST" action="./chiffrement.php">
    <p>
		Message en clair:
		<input type="text" name="msgachif">
	</p>

    <p>
		Code César en + :
		<input type="number" name="number" value="0" min="0" max="25">
	</p>

	<p>
		Message déchiffré:
		<input type="text" id="resultat" name="resultat" disabled value=<?php echo $_COOKIE['cookie']; ?>>
	</p>

	<input type="submit" name="envoyer" value="Chiffrer">

	</form>

    <p>
	---------------------------------------------
	</p>
<form method="POST" action="./dechiffrement.php">
	<p>
		Message chiffré:
		<input type="text" name="msgchif">
	</p>

    <p>
		Code César en + :
		<input type="number" name="nmber" value="0" min="0" max="25">
	</p>

	<p>
		Message clarifié:
		<input type="text" id="msgclair" name="msgclair" disabled value=<?php echo $_COOKIE['cookiedch']; ?>>
	</p>

	<input type="submit" name="envoyer" value="Déchiffrer">

	</form>