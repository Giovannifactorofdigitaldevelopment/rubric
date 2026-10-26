<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $oldName = $_POST['oldName'];
    $newName = $_POST['newName'];
    
    // Controlla se la cartella esiste e la rinomina
    if (is_dir($oldName)) {
        if (rename($oldName, $newName)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Impossibile rinominare la cartella.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'La cartella di origine non esiste.']);
    }
}
?>