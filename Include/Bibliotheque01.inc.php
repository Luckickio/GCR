<?php
function formSelectDepuisRecordset($label, $name, $id, $jeuEnregistrement, $valeurDefaut, $tabIndex) {
    $codeForm = "<label for=\"" . $id . "\">" . $label . " :" . "</label>" . "\n" .
                "<select name=\"" . $name . "\" id=\"" . $id . "\" tabindex=\"" . $tabIndex ."\">" . "\n";
    $jeuEnregistrement->setFetchMode(PDO::FETCH_NUM);
    $item = $jeuEnregistrement->fetch();
    while ($item == True) {
        $codeForm .= "\t" . "<option";
        if ($item[0] == $valeurDefaut) {
            $codeForm .= " selected=\"selected\"";
        }
        $codeForm.= " value=\"" . $item[0] . "\">" . $item[1] . "</option>" . "\n";
        $item = $jeuEnregistrement->fetch();
    }
    $codeForm .= "</select>";
    return $codeForm; 
}
function Para($jeuEnregistrement) {
    $item = $jeuEnregistrement->setFetchMode(PDO::FETCH_ASSOC);
    $item = $jeuEnregistrement->fetch();
    while ($item == True) {
         echo "<p>" . $item['pra_prenom'] ." ".$item['pra_nom'] ."</p>" . "<br>";
         $item = $jeuEnregistrement->fetch();
    }
    return 0;
}
function formInputText($nomLabel, $nomInput, $idInput, $valeurInput, $tailleInput, $longMaxInput, $tabIndex, $lectureSeuleInput) {
    $codeForm = "<label class=\"titre\" for=\"" . $idInput . "\">" . $nomLabel . " :" . "</label>" . "\n" .
                "\t" . "<input type=\"text\" id=\"". $idInput ."\" value=\"" . $valeurInput . "\" size=\"" . $tailleInput . "\" maxlength=\"" . $longMaxInput . "\" name=\"" . $nomInput . "\" class=\"zonePRATI\"" .
                ($lectureSeuleInput == True ? " readonly=\"readonly\"" : "") . " tabindex=\"" . $tabIndex . "\" />" . "\n" .
                "<br>" . "\n" . "<br>" . "\n";
    return $codeForm;
}
// function formInputText($nomLabel, $nomInput, $id, $valeurInput, $tailleInput, $longMaxInput, $tabIndex, $lectureSeuleInput, $requis) {
//     $codeForm = "<label for=\"" . $id . "\">" . $nomLabel . " :" . "</label>" . "\n" .
//                 "\t" . "<input type=\"text\" id=\"". $id ."\" value=\"" . $valeurInput . "\" size=\"" . $tailleInput . "\" maxlength=\"" . $longMaxInput . "\" name=\"" . $nomInput . "\" " .
//                 ($lectureSeuleInput == True ? " readonly=\"readonly\"" : "") . " tabindex=\"" . $tabIndex . "\" " . ($requis == True ? "required=\"required\"" : "") . " />" . "\n" .
//                 "<br>" . "\n" . "<br>" . "\n";
//     return $codeForm;
// }
function formBoutonSubmit($nomBouton, $idBouton, $valeurBouton, $tabIndexBouton) {
    $codeBoutonSubmit = "<input type=\"submit\" value=\"" . $valeurBouton . "\" name=\"" . $nomBouton .  "\" id=\"" . $idBouton . "\" tabindex=\"" . $tabIndexBouton . "\" />" . "\n";
    return $codeBoutonSubmit;
}
function formInputHidden($nomText, $idText, $valeurText){
    $codeInputHidden = "<input type=\"hidden\" value=\"" . $valeurText . "\" name=\"" . $nomText .  "\" id=\"" . $idText . "\" />" . "\n";
    return $codeInputHidden;
}
function formTextArea($label, $nom, $id, $valeur, $largeur, $hauteur, $longMax, $tabIndex, $lectureSeule){
    $CodeTextArea = "<label for=\"" . $id . "\">" . $label . " :" . "</label>" . "\n" .
                    "\t" . "<textarea id=\"" . $id ."\" name=\"" . $nom . "\" cols=\"" . $largeur . "\" rows=\"" . $hauteur . "\" tabindex=\"". $tabIndex . "\" maxlength=\"" . $longMax . "\"" .
                    ($lectureSeule == True ? " readonly=\"readonly\"" : "") . ">" . $valeur . "</textarea>" . "\n" . "<br>" . "\n";
    return $CodeTextArea;
}
function formInputPassword($nomLabel, $nomInput, $id, $valeurInput, $tailleInput, $longMaxInput, $tabIndex, $requis) {
    $codeForm = "<label for=\"" . $id . "\">" . $nomLabel . " :" . "</label>" . "\n" .
                "\t" . "<input type=\"password\" id=\"". $id ."\" value=\"" . $valeurInput . "\" size=\"" . $tailleInput . "\" maxlength=\"" . $longMaxInput . "\" name=\"" . $nomInput . "\" " .
                " tabindex=\"" . $tabIndex . "\" " . ($requis == True ? "required=\"required\"" : "") . " />" . "\n" .
                "<br>" . "\n" . "<br>" . "\n";
    return $codeForm;
}
?>