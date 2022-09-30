<?php

class MusicModel{
   /**
    *  Obtiene la lista de canciones de la DB según género
    */
   function musicByGenre($genre) {
       $db = new PDO('mysql:host=localhost;'.'dbname=db_musca;charset=utf8', 'root', '');
       $query = $db->prepare('SELECT * FROM canciones WHERE genre = ?');
       $query->execute([$genre]);
       $songs = $query->fetchAll(PDO::FETCH_OBJ);
       return $songs;
   }
}
$songs = musicByGenre($genre);