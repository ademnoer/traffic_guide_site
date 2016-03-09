<?php
if (!isset($_SESSION["lang"]) || ($_SESSION["lang"]=="ar")){
    require_once 'private/lang/ar.php';
    $_SESSION["lang"]="ar";
}  else {
    require_once 'private/lang/ar'.$_SESSION["lang"].'.php';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title><?php echo LANG_PageTitle_pathfinder ?></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
