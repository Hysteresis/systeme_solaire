<?php
class Connexion_Api {

    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public static function getConnexion($url)
    {
        $request = curl_init(); 
        curl_setopt($request, CURLOPT_URL, $url); // ensuite on pointe vers l'URL
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true); // on demande qu"une réponse soit retournée
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false); //optionnel permet de retirer la verification SSL si il en a une

        $reponse = curl_exec($request);//on stocke la réponse retournée dans une variable 

        $status = curl_getinfo($request, CURLINFO_HTTP_CODE); //code du status de la reponse
        // echo "code status : " . $status;

        curl_close($request); //fermeture du cURL : ne pas le faire provoque une fuite de données et une utlisation de la mémoire du server

        $reponse = json_decode($reponse, true); //la reponse est en json on la décode
        
        if ($reponse === false){ //on vérifie l'erreur retourné
            echo 'error <br>' . curl_error($request);

        } 
        return $reponse;
    }

}
?>
