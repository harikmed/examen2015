<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>réservation</title>
</head>

<body>
<form action="reserver.php" method="post">
<table width="200"  align="center">
  <tr>
    <td nowrap="nowrap" bgcolor="#CCCCCC">Nom:</td>
    <td><input type="text" name="nom" id="nom"  value="<?php if(isset($_COOKIE['nom'])) echo $_COOKIE['nom']?>"/></td>
  </tr>
  <tr>
    <td nowrap="nowrap" bgcolor="#CCCCCC">Téléphone:</td>
    <td><input type="text" name="telephone" id="telephone"  value="<?php if(isset($_COOKIE['telephone'])) echo $_COOKIE['telephone']?>" /></td>
  </tr>
  <tr>
    <td nowrap="nowrap" bgcolor="#CCCCCC">Date de réservation:</td>
    <td><input type="text" name="datereservation" id="datereservation"  value="<?php if(isset($_COOKIE['datereservation'])) echo $_COOKIE['datereservation']?>"/></td>
  </tr>
  <tr>
    <td nowrap="nowrap" bgcolor="#CCCCCC">Heure de réservation:</td>
    <td><select name="heurereservation" id="heurereservation">
      <option value="8h00">8h00</option>
        <option value="8h15">8h15</option>
        ....
    </select></td>
  </tr>
  <tr>
    <td nowrap="nowrap" bgcolor="#CCCCCC">Nombre de couverts:</td>
    <td><input type="text" name="nombrecouverts" id="nombrecouverts"  value="<?php if(isset($_COOKIE['nombrecouverts'])) echo $_COOKIE['nombrecouverts']?>" /></td>
  </tr>
  <tr>
    <td colspan="2" nowrap="nowrap"><input type="submit" name="reserver"  id="reserver" value="Reserver" />      <input type="reset" name="annuler" id="annuler"  value="Annuler"/></td>
    </tr>
</table>

</form>
</body>
</html>
