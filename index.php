<?php require_once "topo.php" ?>
<?php require_once "menu.php" ?>

<?php

if (!isset($_GET['page']))
    require_once ("home.php");
else
    require_once ($_GET['page'].".php");
?>

<?php require_once "boxs.php" ?>
<?php require_once "footer.php" ?>
