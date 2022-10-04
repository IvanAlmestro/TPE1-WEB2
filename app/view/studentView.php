<?php
require_once ("libs/Smarty.class.php"); 
class musicView{
    private $smarty = new Smarty();
    private $title;

    function __construct(){
        $this->title = "Lista de canciones"
    }

    function MostrarMusicaPorGenero(){
        
        echo "<table> 
        <th> Cancion </th> 
        <th> Genero </th> 
        <th> idioma </th>";

        foreach($canciones as $cancion){
            echo 
            "<tr>
                <td> $cancion->cancion</td>
                <td> $cancion->genero</td>
                <td> $cancion->idioma</td>
            </tr>";
        }
        echo "</table>";
    }

}
