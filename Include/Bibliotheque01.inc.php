<?php
function formSelectDepuisRecordset($label, $name, $id, $jeuEnregistrement, $valeurDefaut, $tabIndex){
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
function formInputText($nomLabel, $nomInput, $idInput, $valeurInput, $tailleInput, $longMaxInput, $tabIndex, $lectureSeuleInput) {
    $codeForm = "<label class=\"titre\" for=\"" . $idInput . "\">" . $nomLabel . " :" . "</label>" . "\n" .
                "\t" . "<input type=\"text\" id=\"". $idInput ."\" value=\"" . $valeurInput . "\" size=\"" . $tailleInput . "\" maxlength=\"" . $longMaxInput . "\" name=\"" . $nomInput . "\" class=\"zonePRATI\"" .
                ($lectureSeuleInput == True ? " readonly=\"readonly\"" : "") . " tabindex=\"" . $tabIndex . "\" />" . "\n" .
                "<br>" . "\n" . "<br>" . "\n";
    return $codeForm;
}
?>