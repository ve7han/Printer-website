<?php 

class DB{
    static public function connect(){
        $db = new PDO("mysql:host=localhost;dbname=imprimerie","root","");
        $db->exec('set names utf8'); // affichage é â ....
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);// warning erreurs
        return $db;
    }
}

?>