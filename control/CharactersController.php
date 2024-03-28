<?php
use  Dompdf\Dompdf;
require_once('./model/Character.Manager.php');

class CharactersController {
    function getCharacters() {
                
        $CharacterManager = new CharacterManager;
        $characters = $CharacterManager->charactersRequest();
        
        require('./view/characters.View.php');        
    }

    function getSingleCharacterPdf($id){
        $CharacterManager = new CharacterManager;
        $singleCharacter = $CharacterManager->SingleCharacterRequest($id);
        var_dump($singleCharacter);
        $pdf = $singleCharacter['name']."<br>".$singleCharacter['description'];

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($pdf);
        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();

    }
}