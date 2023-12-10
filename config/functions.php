<?php

function getFolderProyect(){
   
    if ( strpos(__DIR__, '/') !== false ){
       
    }else{
        $folder = str_replace('C:\\xampp\\htdocs\\','/',__DIR__);
    }

    $folder = str_replace('config', '', $folder);
    return $folder;

}

?>
