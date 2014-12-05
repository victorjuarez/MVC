<?php

function view($plantilla,$variables=array()){
    extract($variables);
    require("Views/".$plantilla.".tpl.php");
}

function controller($nombre){
    if(empty($nombre))
        $nombre='Home';
    $archivo="Controllers/$nombre.php";

    if(file_exists($archivo))
    {

        require($archivo);
    }
     else
     {
         echo"Error archivo no encontrado";

     }

}
?>