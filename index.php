<?php
require_once('./vendor/autoload.php');
//Insert required files
require ('control/CharactersController.php');


//Verify existence of page parameters

try {

    if(isset($_GET['page'])) {
        $id = $_GET['page'];  
        echo $id;      
        $CharacterController = new CharactersController();
        $CharacterController->getSingleCharacterPdf($id);
        
    } else {
    //Calls default controller in CharactersController.php
        $CharacterController = new CharactersController();
        $CharacterController->getCharacters();
    }

} catch(Exception $e) {
    $erreur = $e->getMessage();
}


