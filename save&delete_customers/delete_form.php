<?php
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
// delete_form.php
// 1) Endpoint AJAX (POST): cancella definitivamente un cliente/form dalla
//    tabella Clienti_ in base all'id.
// 2) Se incluso nella pagina (GET): emette il blocco JS con la funzione
//    eliminaCliente() agganciata all'icona #delete_consumer.

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete_cliente') {

    header('Content-Type: application/json');

    // Credenziali DB (coerenti con load_data.php)
    $host   = '31.11.38.21';
    $user   = 'Sql1912322';
    $pass   = '1173151Asx.x37';
    $dbname = 'Sql1912322_3';

    $id = isset($_POST['id']) ? filter_var($_POST['id'], FILTER_VALIDATE_INT) : false;

    if ($id === false || $id <= 0) {
        echo json_encode(['ok' => false, 'errore' => 'id non valido']);
        exit;
    }

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("DELETE FROM Clienti_ WHERE id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        echo json_encode(['ok' => true, 'deleted' => $stmt->rowCount()]);
    } catch (PDOException $e) {
        echo json_encode(['ok' => false, 'errore' => 'Errore durante la cancellazione.']);
    }
    exit;
}
?>
