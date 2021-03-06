<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR."database/complexes.php");
    include_once($BASE_DIR."database/sports.php");
    include_once($BASE_DIR."database/info.php");

    if(!isset($_SESSION['userID']))
    {
        $_SESSION['error_messages'][] = "You can't have acess to this page;";
        header("Location: " . $BASE_URL . "pages/users/home.php");
        die();
    }

    $complexID = $_GET['complexID'];

    $smarty->assign('complexID',$complexID);

    $complexName = getComplexName($complexID);

    $surfaces = getSurfaceList();

    $smarty->assign('SURFACES', $surfaces);

    $smarty->assign('complexName', $complexName);

    $sports = getAllSports();

    $smarty->assign('EQUIPMENT_INFORMATION', $parsedInformation);
    $smarty->assign('SPORTS', $sports);

$smarty->display('pages/managers/addSpace.tpl');
?>