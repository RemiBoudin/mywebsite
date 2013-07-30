<html>
<body>
	<form method="POST" action="trait_upload.php" enctype="multipart/form-data">
	<!-- On limite le fichier à 1Go -->
	<input type="hidden" name="MAX_FILE_SIZE" value="100000000000">
	Fichier : <input type="file" name="avatar">
	<input type="submit" name="envoyer" value="Envoyer le fichier">
</form>
</body>
</html>
