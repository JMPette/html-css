<?php
session_start();
unset($_SESSION["kayttaja"]);
session_destroy();
header("Location: ../rekisterointi/html/kirjaudu.html");
exit();
?>
