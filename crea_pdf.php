<?php
// engine creazione PDF 2025 G.Duffini
define('FPDF_FONTPATH','mk_pdf/font/');
   require('mk_pdf/fpdf.php');
   require("mk_pdf/qrcode.class.php");
   require('mk_pdf/fpdf-wmf.php');
   require('mk_pdf/fpdf-protection.php');
   require('mk_pdf/textbox.php');


$nome = $_POST['nome'];
$tipo_cliente = $_POST['tipo_cliente'];
$indirizzo = $_POST['indirizzo'];
$comune = $_POST['comune'];
$cap = $_POST['cap'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$contatto =  $_POST['contatto'] ;
$commerciale = $_POST['commerciale'] ;
$data =  $_POST['data'];
$interventi_efficientamento = explode(', ' , $_POST['interventi_efficientamento']);
$interventi_impianti = explode(', ' , $_POST['interventi_impianti']); 
$prov = $_POST['prov'];
$partita_iva = $_POST['partita_iva'];
$email_referente = $_POST['email_referente'];
$pec =  $_POST['pec'];
$codice_univoco = $_POST['codice_univoco'];
$metodo_pagamento = $_POST['metodo_pagamento'];
$incentivo = $_POST['incentivo'];
$gestore_rete = $_POST['gestore_rete'];
$pot_contatore = $_POST['pot_contatore'];
$cons_anno = $_POST['cons_anno'];
$notes= $_POST['notes'];
$state_practice = $_POST['state_practice'];
$id = $_POST['id']; 
$tipo_dati = $_POST['tipo_dati'];
$privacy = ($_POST['privacy']);
$media = isset($_POST['media']) ? $_POST['media'] : '';
$nome_pdf = isset($_POST['nome_pdf']) ? $_POST['nome_pdf'] : '';
$id    = isset($_POST['id'])    ? (int)$_POST['id'] : 0;
$cartella_cliente = isset($_POST['cartella_cliente']) ? $_POST['cartella_cliente'] : '';
$cartella_scheda = isset($_POST['cartella_scheda']) ? $_POST['cartella_scheda'] : '';



//////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
//legge l'id per poter salvare il campo media se il cliente è esistente , se è nuovo tutto viene fatto con salva pratica 

$db_host = "31.11.38.21";
$db_user = "Sql1912322";
$db_pass = "1173151Asx.x37";
$db_name = "Sql1912322_3";



	$titolo_pdf="gupi";
	$nomefile_pdf="gupisdd";

	  $pdf = new FPDF_WMF('P','mm',array(210,297));
	  $pdf->SetCreator('Enjoy Energia');
	  $pdf->SetAuthor('Enjoy Energia');
	  $pdf->SetSubject('Enjoy Energia');
	  $pdf->SetKeywords('Enjoy Energia EnjoyEnergia EnjoyEnergia');
	  $pdf->SetTitle($titolo_pdf);
	  $pdf->SetMargins(0,0,0);
	  $pdf->AddFont('gotica','','BankGothicBT-Medium.php');
	  $pdf->AddFont('roboto','','Roboto-Condensed.php');
	  $pdf->AddFont('roboto-bold','','Roboto-BoldCondensed.php');
	  $pdf->SetFont('roboto-bold','',11);
	  $pdf->SetDisplayMode('fullpage','single');
	  $pdf->SetAutoPageBreak(0,0);

		// costruzione pagina

		$pdf->AddPage();		  
          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/modulo_cliente_vuoto.wmf', 0, 0, 210);

		  // impostazioni testo: nero, roboto, corpo 9
		  $pdf->SetTextColor(0, 0, 0);
		  $pdf->SetFont('roboto-bold', '',14);

		  // DATA  (rettangolo in alto a destra, sotto etichetta "DATA")
		  $pdf->SetXY(158, 23);
		  $pdf->Cell(40, 6, $data, 0, 0, 'L', 0);

		  // CANALE  (rettangolo sotto "CANALE")		  
	      $pdf->SetXY(158, 40);
		  $pdf->Cell(40, 6, $contatto, 0, 0, 'L', 0);
		  $pdf->Cell(40, 6, $contatto, 0, 0, 'L', 0);

		  // NOME  (rettangolo in basso a sinistra, sotto etichetta "NOME")
		  $pdf->SetXY(14, 66);
		  $pdf->Cell(75, 6, strtoupper($nome), 0, 0, 'L', 0);

		  // INDIRIZZO  (rettangolo centrale, sotto etichetta "INDIRIZZO")
		  $pdf->SetXY(91, 66);
		  $pdf->Cell(65, 6, strtoupper($indirizzo), 0, 0, 'L', 0);

		  // CAP  (rettangolo a destra, sotto etichetta "CAP")
		  $pdf->SetXY(171, 66);
		  $pdf->Cell(27, 6, $cap, 0, 0, 'C', 0);

		  // CITTA  (rettangolo in basso a sinistra, sotto etichetta "CITTA")
		  $pdf->SetXY(14, 85);
		  $pdf->Cell(75, 6, strtoupper($comune), 0, 0, 'L', 0);

		  // EMAIL  (rettangolo centrale, sotto etichetta "EMAIL")
		  $pdf->SetXY(90, 85);
		  $pdf->Cell(65, 6, $email, 0, 0, 'L', 0);

		  // TELEFONO  (rettangolo a destra, sotto etichetta "TELEFONO")
		  $pdf->SetXY(163, 85);
		  $pdf->Cell(27, 6, $telefono, 0, 0, 'C', 0);

		  $pdf->SetFontSize(14);

		  // GESTORE RETE  (rettangolo sinistra, sotto etichetta "GESTORE RETE")
		  $pdf->SetXY(12, 110);
		  $pdf->Cell(75, 6, strtoupper($gestore_rete), 0, 0, 'L', 0);

		  // POT. CONTATORE  (rettangolo sinistra, sotto etichetta "POT. CONTATORE")
		  $pdf->SetXY(11, 129.3);
		  $pdf->Cell(75, 6, $pot_contatore, 0, 0, 'L', 0);

		  // CONS. KW ANNO  (rettangolo sinistra, sotto etichetta "CONS. KW ANNO")
		  $pdf->SetXY(11, 147.2);
		  $pdf->Cell(75, 6, $cons_anno, 0, 0, 'L', 0);

		  $pdf->SetFontSize(14);

		  // COMMERCIALE  (rettangolo sinistra, sotto etichetta "COMMERCIALE")
		  $pdf->SetXY(11, 186);
		  $pdf->Cell(60, 6, strtoupper($commerciale), 0, 0, 'L', 0);

		  // BANDO  (rettangolo centrale, sotto etichetta "BANDO")
		  $pdf->SetXY(62, 186);
		  $pdf->Cell(60, 6, strtoupper($incentivo), 0, 0, 'L', 0);

		  // PAGAMENTO  (rettangolo destra, sotto etichetta "PAGAMENTO")
		  $pdf->SetXY(149, 186);
		  $pdf->Cell(50, 6, strtoupper($metodo_pagamento), 0, 0, 'L', 0);

		  // TIPO CLIENTE  (icona sotto etichetta "TIPO CLIENTE", in alto al centro)
          if($tipo_cliente =="azienda"){
			  $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/icona_azienda.wmf', 117, 23, 17);
		  } else if($tipo_cliente =="privato") {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/icona_cliente.wmf', 117, 23, 17);
		  } else if($tipo_cliente =="pubblico") {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/icona_pubblico.wmf', 117, 23, 17);
		  }
			
		 ////ISCRIZIONE ALLA CER DA VEDERE NELLA SEZIONE CONSUMI
		  if($tipo_cliente =="pubblico") {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/green_check.wmf', 32.9, 163.1, 6.059);
		  } else {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/red_cheeck.wmf', 49.5, 163, 6.059);
		  }

		 ////AUTORIZZAZIONE PRIVACY
		  if($privacy == 1) {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/green_check.wmf', 93.7, 280.3, 6.059);
		  }
 


		  // NOTE  (area testo grande in basso, W=183mm, H=75mm, righe ogni ~8mm)
		  $pdf->SetFont('roboto-bold', '', 12);
		  $pdf->SetXY(12, 212.5);
		  $pdf->MultiCell(183, 8, $notes, 0, 'L', 0);

		// fine costruzione pagina
			 if (in_array("cappotto", $interventi_efficientamento)) {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/green_check.wmf', 135.6, 111.5, 6.059);
			}
			 if (in_array("isol. tetto", $interventi_efficientamento)) {  
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/green_check.wmf', 135.6, 118.6, 6.059);
			}
			 if (in_array("sottotetto", $interventi_efficientamento)) {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/green_check.wmf', 135.9, 126, 6.059);
			}
			 if (in_array("infissi", $interventi_efficientamento)) {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/green_check.wmf', 136, 133, 6.059);
			}
			 if (in_array("oscuranti", $interventi_efficientamento)) {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/green_check.wmf', 135.8, 140.4, 6.059);
			}
			 if (in_array("schermat. solare", $interventi_efficientamento)) {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/green_check.wmf', 135.4, 148, 6.059);
			} 

///////////////////////////////////////ARRAY PER INTERVENTI IMPIANTI 
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
			 if (in_array("impianto fv", $interventi_impianti)) {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/green_check.wmf', 190.6, 111.6, 6.059);
			}
			 if (in_array("colonnina ric.auto", $interventi_impianti)) {  
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/green_check.wmf', 190.6, 118.8, 6.059);
			}
			 if (in_array("batterie accumulo", $interventi_impianti)) {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/green_check.wmf', 190.5, 126, 6.059);
			} 
			 if (in_array("caldaia ibrida", $interventi_impianti)) {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/green_check.wmf', 190.5, 133.4, 6.059);
			}
			 if (in_array("pompa di calore", $interventi_impianti)) {
	          $pdf->ImageWMF('https://www.enjoyenergia.it/crmaz1/elementi_pdf/green_check.wmf', 190.5, 140.7, 6.059);
			} 
		


// creazione del file sul server
// output
		  $ppercorso="clienti/".$cartella_cliente."/".$cartella_scheda;
		  $pdf->Output($ppercorso.$nome_pdf.'','F');

	// visualizzazione inline del file
	//header("location: ".$ppercorso.$nomefile_pdf.'.pdf');
		  $pdfFileContent = file_get_contents($ppercorso.$nome_pdf);
		  $pdfBase64 = base64_encode($pdfFileContent);

		  /*echo json_encode([
    	  'pdf_base64' => $pdfBase64,
    	  'success' => true,
    	  'file_path' => $ppercorso.$nomefile_pdf.'.pdf'
		  ]);*/


	// creazione miniatura
	$filePdf = $ppercorso.$nome_pdf.""; 
	//$immagineMiniatura = $nomefile_pdf;

	// [0] indica la prima pagina del PDF
	$im = new Imagick($filePdf . "[0]"); 
	$im->setImageFormat("jpeg");
	// Ridimensiona mantenendo le proporzioni (es. max 200x200)
	$im->thumbnailImage(350, 350, true); 
	$im->writeImage($ppercorso.$nome_pdf.".jpg");
	$im->clear();
	$im->destroy();

	if ($id > 0) {
		try {
			$connMedia = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
			$connMedia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmtMedia = $connMedia->prepare("UPDATE Clienti_ SET media = :media WHERE id = :id");
			$stmtMedia->execute([':media' => $nome_pdf, ':id' => $id]);
			$connMedia = null;
		} catch(PDOException $e) {}
	}

//		header("Cache-Control: public");
//		header("Content-Description: File Transfer");
//		header("Content-Disposition: attachment; filename= ".$nomefile_pdf.'.pdf');
//		header("Content-Transfer-Encoding: binary");
//		// Leggo il contenuto del file
//		readfile($ppercorso.$nomefile_pdf.'.pdf');
////////////////////////////////////////////////////////////////////////////////////////////
//		 _______ .___  ___.      ___       __   __      
//		|   ____||   \/   |     /   \     |  | |  |     
//		|  |__   |  \  /  |    /  ^  \    |  | |  |     
//		|   __|  |  |\/|  |   /  /_\  \   |  | |  |     
//		|  |____ |  |  |  |  /  _____  \  |  | |  `----.
//		|_______||__|  |__| /__/     \__\ |__| |_______|
                                                
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/*Classe per la gestione delle eccezioni e degli errori*/
require 'PHPMailer/src/Exception.php';
/*Classe PHPMailer*/
require 'PHPMailer/src/PHPMailer.php';
/*Classe SMTP, necessaria per stabilire la connessione con un server SMTP*/
require 'PHPMailer/src/SMTP.php';
/*Quando si crea un oggetto PHPMailer, occorre passare il parametro "true" per attivare le eccezioni (messaggi in caso di errore)*/
$messaggio = new PHPmailer();

		//definiamo le intestazioni e il corpo del messaggio
		$messaggio->From="gestionale@enjoyenergia.it";
		$messaggio->FromName = "picco";
		
		// ciclo tutti gli indirizzi email destinatari
	$email_destinazione = isset($_POST['email_destinazione']) ? trim($_POST['email_destinazione']) : '';
	$destinatari = [];
	if ($email_destinazione) {
    $parts = explode(',', $email_destinazione);
    foreach ($parts as $e) {
        $e = trim($e);
        if (filter_var($e, FILTER_VALIDATE_EMAIL)) {
            //$destinatari[] = $e;
				$messaggio->AddAddress($e);
        	}
    	}
	}

			
		// se esitono cc li ciclo e li inserisco
		
		//$messaggio->AddReplyTo('info@mittente.it'); 
		//$messaggio->AddCC('info@mittente.it'); 
		
		$messaggio->Subject="collaborazione per lucca comics";
		$messaggio->Body=stripslashes("Che ne dici se io mi travesto da Luffy Cappello di paglia, Elisabetta da Nami e tu da Robin?");
		$messaggio->AddAttachment($ppercorso.$nome_pdf,"guzu");
		
		//definiamo i comportamenti in caso di invio corretto 
		//o di errore
		if(!$messaggio->Send()){ 
			//non riuscito
		}else{
			//spefito
		}
		
		//chiudiamo la connessione
		//$messaggio->SmtpClose();
		unset($messaggio);

//		 _______ .___  ___.      ___       __   __      
//		|   ____||   \/   |     /   \     |  | |  |     
//		|  |__   |  \  /  |    /  ^  \    |  | |  |     
//		|   __|  |  |\/|  |   /  /_\  \   |  | |  |     
//		|  |____ |  |  |  |  /  _____  \  |  | |  `----.
//		|_______||__|  |__| /__/     \__\ |__| |_______|
////////////////////////////////////////////////////////////////////////////////////////////
                                                


?>