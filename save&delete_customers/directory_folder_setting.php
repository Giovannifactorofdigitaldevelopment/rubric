<?php
// Imposta il percorso della cartella che ti interessa (es. 'immagini')
$dir = $_POST['cartella'];

if (is_dir($dir)){
    $files = scandir($dir);
    $file_list = array();
    
    foreach($files as $file){
        // Escludiamo le cartelle speciali di sistema . e ..
        if (!in_array($file, array('.', '..'))){
            $file_list[] = $file;
        }
    }
    // Restituisce l'array in formato JSON
    echo json_encode($file_list);
} else {
    echo json_encode(array($dir ));
}
?>