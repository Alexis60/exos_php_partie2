<?php
$genre = "Homme";
$age = 18;
if ($genre == "Homme" AND $age<=18) {
 echo "Vous êtes un homme et vous êtes mineur";
}
elseif ($genre == "Homme" AND $age>=18) {
  echo "Vous êtes un homme et vous êtes majeur";
}
elseif ($genre == "Femme" AND $age<=18) {
  echo "Vous êtes une femme et vous êtes mineure";
}
elseif ($genre == "Femme" AND $age>=18) {
  echo "Vous êtes une femme et vous êtes majeure";
}

 ?>
