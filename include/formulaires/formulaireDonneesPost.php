<form action="index.php" method="post">
<p>
	<label for name="prenom">Votre prénom</label>
    <input type="text" name="prenom" />
</p>

<textarea name="message" rows="8" cols="45">
Votre message ici.
</textarea>

<select name="choix">
    <option value="choix1">Choix 1</option>
    <option value="choix2">Choix 2</option>
    <option value="choix3" selected="selected">Choix 3</option>
    <option value="choix4">Choix 4</option>
</select>


<input type="checkbox" name="case1" id="case1" /> <label for="case1">Ma case à cocher 1</label>
<input type="checkbox" name="case2" id="case2" checked="checked"/> <label for="case2">Ma case à cocher 2</label>


<input type="hidden" name="pseudo" value="Mateo21" />


Aimez-vous les frites ?
<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
<input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>


<input type="submit" value="Valider" />




</form>