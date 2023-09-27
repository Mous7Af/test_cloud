
<!DOCTYPE html>
<html>
<head>
	<title>FORMULAIRE D'ENREGISTREMENT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <form method="post" action="participants.php">
 <ul>
  <li>
    <label for="name">Nom:</label>
    <input type="text" name="nom">
  </li>
  <li>
    <label for="first_name">prenom:</label>
    <input type="text" name="prenoms">
  </li>
  <li>
    <label for="number">numero tel:</label>
    <input type="tel" name="tel">
  </li>
  <li>
    <label for="mail">email:</label>
    <input type="email"  name="email">
  </li>
   
   <li><button type="submit" name="valider">Envoyer</button></li>
 </ul>
</form>

</body>
</html>