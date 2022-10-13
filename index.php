<?php
if (!isset($_REQUEST["action"])) {
    $_REQUEST["action"] = 0;
}
switch ($_REQUEST["action"]) {
    case 0:
        require_once "Include/entete.inc.php";
        require_once "Include/pied.inc.php";
        break;
    case 10:
        require_once "formRAPPORT_VISITE.php";
        break;
    case 20:
        require_once "formMEDICAMENT.php";
        break;
    case 30:
        require_once "formPRATICIEN.php";
        break;
    case 40:
        require_once "formVISITEUR.php";
        break;
}
?>