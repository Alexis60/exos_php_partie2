<?php
$genre = "Homme";
$age = 18;
if (($genre == "Homme") && ($age<=18)) {
 echo "Vous êtes un homme et vous êtes mineur";
}
elseif (($genre == "Homme") && ($age>=18)) {
  echo "Vous êtes un homme et vous êtes majeur";
}
elseif (($genre == "Femme") && ($age<=18)) {
  echo "Vous êtes une femme et vous êtes mineure";
}
elseif (($genre == "Femme") && ($age>=18)) {
  echo "Vous êtes une femme et vous êtes majeure";
}
else {
  echo "Vous avez fais une erreur quelque part"
}
 ?>
