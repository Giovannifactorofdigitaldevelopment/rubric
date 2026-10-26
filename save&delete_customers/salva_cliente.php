<?php


$host = '31.11.38.21'; 
$user = 'Sql1912322'; 
$pass = '1173151Asx.x37'; 
$dbname = 'Sql1912322_3';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// raccolta dati
$nome = $conn->real_escape_string($_POST['nome']);
$tipo_cliente = $conn->real_escape_string($_POST['tipo_cliente']);
$indirizzo = $conn->real_escape_string($_POST['indirizzo']);
$comune = $conn->real_escape_string($_POST['comune']);
$cap = $conn->real_escape_string($_POST['cap']);
$email = $conn->real_escape_string($_POST['email']);
$telefono = $conn->real_escape_string($_POST['telefono']);
$contatto = (!empty($_POST['contatto'])) ? "'" . $conn->real_escape_string($_POST['contatto']) . "'" : "NULL";
$commerciale = (!empty($_POST['commerciale'])) ? "'" . $conn->real_escape_string($_POST['commerciale']) . "'" : "NULL";
$data = (!empty($_POST['data'])) ? "'" . $conn->real_escape_string($_POST['data']) . "'" : "NULL";
$interventi_efficientamento = (!empty($_POST['interventi_efficientamento'])) ? "'" . $conn->real_escape_string($_POST['interventi_efficientamento']) . "'" : "NULL";
$interventi_impianti = (!empty($_POST['interventi_impianti'])) ? "'" . $conn->real_escape_string($_POST['interventi_impianti']) . "'" : "NULL";
$prov = (!empty($_POST['prov'])) ? "'" . $conn->real_escape_string($_POST['prov']) . "'" : "NULL";
$partita_iva = (!empty($_POST['partita_iva'])) ? "'" . $conn->real_escape_string($_POST['partita_iva']) . "'" : "NULL";
$email_referente = (!empty($_POST['email_referente'])) ? "'" . $conn->real_escape_string($_POST['email_referente']) . "'" : "NULL";
$pec = (!empty($_POST['pec'])) ? "'" . $conn->real_escape_string($_POST['pec']) . "'" : "NULL";
$codice_univoco = (!empty($_POST['codice_univoco'])) ? "'" . $conn->real_escape_string($_POST['codice_univoco']) . "'" : "NULL";
$metodo_pagamento = (!empty($_POST['metodo_pagamento'])) ? "'" . $conn->real_escape_string($_POST['metodo_pagamento']) . "'" : "NULL";
$incentivo = (!empty($_POST['incentivo'])) ? "'" . $conn->real_escape_string($_POST['incentivo']) . "'" : "NULL";
$gestore_rete = (!empty($_POST['gestore_rete'])) ? "'" . $conn->real_escape_string($_POST['gestore_rete']) . "'" : "NULL";
$pot_contatore = (!empty($_POST['pot_contatore'])) ? "'" . $conn->real_escape_string($_POST['pot_contatore']) . "'" : "NULL";
$cons_anno = (!empty($_POST['cons_anno'])) ? "'" . $conn->real_escape_string($_POST['cons_anno']) . "'" : "NULL";
$notes= (!empty($_POST['notes'])) ? "'" . $_POST['notes'] . "'" : "NULL";
$state_practice = (isset($_POST['state_practice']) && $_POST['state_practice'] !== '') ? "'" . $conn->real_escape_string($_POST['state_practice']) . "'" : "NULL";
$id = ($_POST['id']);
$tipo_dati = ($_POST['tipo_dati']);
$privacy = ($_POST['privacy']);
$media = ($_POST['media']);
$Log = ($_POST['Log']);
$scheda_pdf = ($_POST['scheda_pdf']);
$cartella_cliente = ($_POST['cartella_cliente']);

//echo "privacy: ".$privacy;
//echo "media: ".$media;
//echo "log: ".$Log;
//die(); // Blocca lo script qui per leggere il risultato
//echo "<br>"."UPDATE Clienti_
//      SET Nome='".$nome."',
//	  Indirizzo='".$indirizzo."',
//	  Comune='".$comune."',
//	  Cap='".$cap."',
//	  email='".$email."',
//	  telefono='".$telefono."',
//	  canale_contatto= ".$contatto.",
//	  commerciale= ".$commerciale.",
//	  data= ".$data.", 
//	  Interventi_risparmio= ".$interventi_efficientamento.", 
//	  Interventi_impianti= ".$interventi_impianti.",
//	  Provincia= ".$prov. ",
//	  pec= ".$pec. ",
//	  Gestore_rete= ".$gestore_rete. ",	 
//	  potenza_contatore= ".$pot_contatore. ",	 
//	  consumo_kw_annuo= ".$cons_anno. ",	  
//	  modalità_pagamento= ".$metodo_pagamento. ",
//	  bando= ".$incentivo. ",
//	  partitaIVA= ".$partita_iva.",
//	  Referentemail= ".$email_referente.",
//	  codice_univoco=".$codice_univoco.",
//	  note= ".$notes. ",	 
//	  stato_pratica= ".$state_practice. ",	 
//	  privacy= ".$privacy. ",
//	  media = '".$media."',
//	  Log= '".$Log. "'
//	  
//	  
//      WHERE id = ".$id; ;
//
//echo "Connessione riuscita".$data =(date("d-m-y G:i:s"));
 
$sql = "UPDATE Clienti_copioni
      SET Nome='".$nome."',
	  tipo_cliente='".$tipo_cliente."',
	  Indirizzo='".$indirizzo."',
	  Comune='".$comune."',
	  Cap='".$cap."',
	  email='".$email."',
	  telefono='".$telefono."',
	  canale_contatto= ".$contatto.",
	  commerciale= ".$commerciale.",
	  data= ".$data.", 
	  Interventi_risparmio= ".$interventi_efficientamento.", 
	  Interventi_impianti= ".$interventi_impianti.",
	  Provincia= ".$prov. ",
	  pec= ".$pec. ",
	  Gestore_rete= ".$gestore_rete. ",	 
	  potenza_contatore= ".$pot_contatore. ",	 
	  consumo_kw_annuo= ".$cons_anno. ",	  
	  modalità_pagamento= ".$metodo_pagamento. ",
	  bando= ".$incentivo. ",
	  partitaIVA= ".$partita_iva.",
	  Referentemail= ".$email_referente.",
	  codice_univoco=".$codice_univoco.",
	  note= ".$notes. ",
	  media = '".$media."',
	  stato_pratica= ".$state_practice. ",	 
	  privacy= ".$privacy. ",
	  Log= '".$Log. "',
	  scheda_pdf= '".$scheda_pdf. "',
	  cartella_cliente = '".$cartella_cliente. "'
	  
	  
      WHERE id = ".$id; 

$sql_insert = "INSERT INTO Clienti_copioni
      SET Nome='".$nome."',
	  tipo_cliente='".$tipo_cliente."',
	  Indirizzo='".$indirizzo."',
	  Comune='".$comune."',
	  Cap='".$cap."',
	  email='".$email."',
	  telefono='".$telefono."',
	  canale_contatto= ".$contatto.",
	  commerciale= ".$commerciale.",
	  data= ".$data.", 
	  Interventi_risparmio= ".$interventi_efficientamento.", 
	  Interventi_impianti= ".$interventi_impianti.",
	  Provincia= ".$prov. ",
	  pec= ".$pec. ",
	  Gestore_rete= ".$gestore_rete. ",	 
	  potenza_contatore= ".$pot_contatore. ",	 
	  consumo_kw_annuo= ".$cons_anno. ",	  
	  modalità_pagamento= ".$metodo_pagamento. ",
	  bando= ".$incentivo. ",
	  partitaIVA= ".$partita_iva.",
	  Referentemail= ".$email_referente.",
	  codice_univoco=".$codice_univoco.",
	  note= ".$notes. ",	 
	  stato_pratica= ".$state_practice. ",	 
	  privacy= ".$privacy. ",
	  media = '".$media."',
	  scheda_pdf= '".$scheda_pdf. "',
	  Log= '".$Log. "',
	  cartella_cliente= '".$cartella_cliente. "'
	  
	
      "; 
if($tipo_dati== "nuovo"){
///////////////////////////////////////////////////////////////////////////////////////////////	
$folder = "clienti/".$cartella_cliente;
if (!empty($folder)) {
    if (!is_dir($folder)) {
        if (mkdir($folder, 0755, true)) {
           // echo json_encode(['status' => 'success', 'message' => 'Cartella creata con successo.']);
        } else {
            //echo json_encode(['status' => 'error', 'message' => 'Impossibile creare la cartella.']);
        }
    } else {
        //echo json_encode(['status' => 'success', 'message' => 'La cartella esiste già.']);
    }
} else {
    //echo json_encode(['status' => 'error', 'message' => 'Percorso non valido.']);
}
///////////////////////////////////////////////////////////////////////////////////////////////	
$result = $conn->query($sql_insert);
$new_id = $conn->insert_id;
echo json_encode(['status'=>'ok','new_id'=>$new_id]);
} else if($tipo_dati== "modifica") {
	// verifico nome cartella e lo cambio in base al nome cliente
$result = $conn->query($sql);
echo json_encode(['status'=>'ok','new_id'=>null]);
}


// 3. Lettura e visualizzazione dei dati
//if ($result->num_rows > 0) {
//    echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>Email</th></tr>";
//    // Ciclo while per scorrere le righe
//    while($row = $result->fetch_assoc()) {
//        echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
//    }
//    echo "</table>";
//} else {
//    echo "0 risultati";
//}
//
//$name = 'gian';
//$email = 'yash@example.com';
//$password = sha1('16235761253');
//$telefono = '340';
//$snd = '117473';
//$nome = 'Luca';
//$autorizza = '1,0,0,0,0';
//
//$query = "INSERT INTO users (username,email,password,telefono,snd,nome,autorizza) VALUES ('$name', '$email', '$password', '$telefono', '$snd', '$nome', '$autorizza')";
//$result = mysqli_query($conn, $query);
//
//if ($result) {
//    echo "Dati inseriti correttamente!";
//} else {
//    echo "Error: " . mysqli_error($conn);
//}
$conn->close();
?>