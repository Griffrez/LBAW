<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR . "database/complexes.php");
    include_once($BASE_DIR . "database/users.php");

    $complexID = $_POST['complexID'];
    $spaceID = $_POST['spaceID'];
    $name = $_POST['name'];
    $surface = $_POST['surface'];
    $coverage = "true";
    $price = $_POST['price'];
    $isAvailable = "true";

    echo $complexID . ' ' . $spaceID . ' ' . $name . ' ' . $surface . ' ' . $_POST['coverage'] . ' ' . $price . ' ' .$_POST['isAvailable'] ;

die();
    if($_POST['isAvailable']=="No")
        $isAvailable = "false";

    if($_POST['coverage'] == "Uncovered")
        $coverage = "false";

    $sports = $_POST['sports'];

    $required = [$complexID, $spaceID, $name, $surface, $_POST['coverage'], $_POST['isAvailable'], $sports, $price];

    foreach ($required as $item)
    {
        if (empty($item))
        {
            $_SESSION['error_messages'][] = "Required field wasn't filled.";
            if(!empty($complexID))
                header("Location: " . $BASE_URL."pages/managers/manageSpaces.php/?complexID=" . $complexID);
            else header('Location: ' . $_SERVER['HTTP_REFERER']);
            die();
        }
    }

    try
    {
        if (editSpace($spaceID, $name, $surface, $coverage, $isAvailable, $price, $sports))
        {
            $_SESSION['success_messages'][] = "Space edited successful";
            header("Location: " . $BASE_URL."pages/managers/manageSpaces.php/?complexID=" . $complexID);
        }
        else
        {
            $_SESSION['error_messages'][] = "Unknown error occurred;";
            header("Location: " . $BASE_URL."pages/managers/manageSpaces.php/?complexID=" . $complexID);
        }
    }
    catch (PDOException $e)
    {
        throw $e;
        $_SESSION['error_messages'][] = "Unknown error occurred;";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }