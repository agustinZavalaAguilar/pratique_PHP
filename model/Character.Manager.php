<?php

class CharacterManager {
    function charactersRequest() {
        
        try {
            $client = new GuzzleHttp\Client();
            $response = $client->request('GET', 'https://dragonball-api.com/api/characters?limit=10');
            
                if ($response->getStatusCode() == 200) {
                    return json_decode($response->getBody()->getContents(),true);
                    } else {
                    throw new Exception('Une erreur est survenue');
                }; 
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    function SingleCharacterRequest($id) {
        try {
            $client = new GuzzleHttp\Client();
            $singleCharacter = $client->request('GET', "https://dragonball-api.com/api/characters/".$id);
            
                if ($singleCharacter->getStatusCode() == 200) {
                    return json_decode($singleCharacter->getBody()->getContents(),true);
                    } else {
                    throw new Exception('Une erreur est survenue');
                }; 
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}