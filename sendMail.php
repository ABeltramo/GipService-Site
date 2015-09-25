<?php
	function _GetHeader(){
		// costruiamo alcune intestazioni generali
		$header = "From: GipserviceVerbania <prenotazioni@gipserviceverbania.it>\n";
		$header .= "X-Mailer: ABeltramo Mail 1.0\n";
		
		// costruiamo le intestazioni specifiche per il formato HTML
		$header .= "MIME-Version: 1.0\n";
		$header .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
		$header .= "Content-Transfer-Encoding: 7bit\n\n";
		return $header;	
	}
	
	function InviaMail($To,$Oggetto,$Msg){
		$Msg .= "";
		if( @mail($To, $Oggetto, $Msg, _GetHeader()) ) 
			return true;
		else 
			return false;
	}
	
	require_once("Sicurezza.php");
	
	if(isset($_GET["Email"]) && isset($_GET["Indirizzo"]) && isset($_GET["Richiedente"])){
		$Msg = "<h1>Nuova prenotazione!</h1>";
		foreach ($_GET as $key => $value) { 
			$Msg .= $key.": ".sqli($value)."<br>";
		}
		InviaMail("beltramo.ale@gmail.com","Nuovo ritiro lavanderia",$Msg);
		InviaMail("jpavesi@tiscalinet.it","Nuovo ritiro lavanderia",$Msg);
		echo "OK";
	}
?>