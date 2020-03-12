<?php

// import des classes de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// load composer's autoloader
require '../vendor/autoload.php';

// Tableau d'erreurs
$errors = [];
$formValid = false;
$mailSend = false;

//Vérification du formulaire
if(!empty($_POST)){

    // Sécurisation --> en vue d'une future insertion en bdd 
    $safe = array_map('trim', array_map('strip_tags', $_POST));

    // Vérification du nom
    if(empty($safe['lastname'])){
        $errors[] = 'Merci de saisir votre nom';
    }
    // Vérification du prénom
    if(empty($safe['firstname'])){
        $errors[] = 'Merci de saisir votre prénom';
    }

    // Vérification de l'email
    if(empty($safe['email'])){
        $errors[] = 'Merci de saisir un email';
    }
    elseif(!filter_var(($safe['email']), FILTER_VALIDATE_EMAIL)){
        $errors[] = "Merci de saisir un email valide";
    }   

	if(count($errors) === 0){
		$formValid = true;
		$mail = new PHPMailer;

		// paramétrage du SMTP
		$mail->SMTPOptions = [
								'ssl' => [
											'verify_peer' => false,
											'verify_peer_name' => false,
											'allow_self_signed' => true
										]
							];

		// $mail->SMTPDebug = 3; //mode debug si > 2
		$mail->CharSet = 'UTF-8';
		$mail->isSMTP(); //connexion directe à un serveur SMTP
		$mail->isHTML(true); //mail au format HTML
		$mail->Host = "smtp.web4all.fr"; //serveur SMTP
		$mail->SMTPAuth = true; //serveur sécurisé
		$mail->Port = 465; //port utilisé par le serveur (sécurisé SSL 465, TLS 993 ou 995)
		$mail->SMTPSecure = 'ssl'; //certificat ssl
		$mail->Username = 'bidule@truc.fr'; //login
		$mail->Password = '**'; //mot de passe
		$mail->AddAddress('machin@chose.fr'); //destinataire
		// $mail->AddAddress('truc@muche.fr'); //autre dest
		$mail->AddCC('copie@carbone.fr'); //copie carbone
		// $mail->AddBCC('patron@societe.com'); //copie cachée
		$mail->SetFrom('bidule@truc.fr', $safe['lastname'].' '.$safe['firstname']); //expediteur
		$mail->Subject = $safe['subject']; //sujet

		$mail->Body = 	'<html>
							<head>
								<style>
									body {}
									p {	margin: 0; }
									.msg {
										background-color: #eee;
										border-top-left-radius: 15px;
										border-top-right-radius: 15px;
										padding: 25px;
										font-size: 110%;
									}
									.info {
										background-color: #ddd;
										border-bottom-left-radius: 15px;
										border-bottom-right-radius: 15px;
										color: #444;
										padding: 15px;
									}
									a { color: inherit !important; }
								</style>
							</head>
							<body>
							<div class="msg">
								<p>'.nl2br($safe['message']).'</p>
							</div>
							<div class="info">
								<p>Ce message a été envoyé depuis le site https://www.gaelle-david.cmoi.cc</p>
								<br>
								<p><strong>Expéditeur:</strong> '.$safe['lastname'].' '.$safe['firstname'].'</p>
								<p><strong>Objet:</strong> '.$safe['subject'].'</p>
								<p><strong>Répondre à:</strong> '.$safe['email'].'</p>
							</div>
							</body>
						</html>';

		// pièces jointes
		// $mail->AddAttachment('../img/no-img.png');
		// $mail->AddAttachment('../img/no-img.jpg');
		// accusé de réception
		$mail->AddCustomHeader('X-Confirm-Reading-To: '.$safe['email']);
		$mail->AddCustomHeader('Return-receipt-to: '.$safe['email']);

		if ($mail->Send()){
			$mailSend = true;
		}
	}
}

echo json_encode([
	'formValid' => $formValid,
	'mailSend' 	=> $mailSend,
	'errors' 	=> $errors
]);

?>

