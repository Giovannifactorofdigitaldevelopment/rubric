<?php
$host = '31.11.38.21'; 
$user = 'Sql1912322';
$pass = '1173151Asx.x37';
$dbname = 'Sql1912322_3';

header('Content-Type: application/json');

try {
    // Connessione al database PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT id, nome, tipo_cliente, indirizzo, comune, provincia, cap, partitaIVA, email, IDENT, note, stato_pratica, contratto, commessa, data, canale_contatto, commerciale, consumo_kw_annuo, potenza_contatore, telefono, Gestore_rete, interventi_risparmio, interventi_impianti, modalità_pagamento, bando, privacy, media, scheda_pdf, Log, Referentemail, pec, codice_univoco, cartella_cliente FROM Clienti_copioni");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // dati in formato JSON
    echo json_encode($data);

} catch (PDOException $e) {
    // DIAGNOSTICA: espone l'errore SQL reale invece di restituire un array vuoto silenzioso
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()]);
}
?>