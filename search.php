<?php

$term = $_POST['searchterm'];
$redirect = "$term.html";
//echo $redirect;
header("Location: $redirect");
?>