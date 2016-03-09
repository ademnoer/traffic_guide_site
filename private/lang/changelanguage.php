<?php
session_start();
if (isset($_GET["lang"])){
    $newlang = $_GET["lang"];
}  else {
    $newlang = "ar";
}

echo $_SESSION["lang"] = $newlang;

header("Location: ../../index.php");
