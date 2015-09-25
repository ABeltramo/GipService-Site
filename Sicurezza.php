<?php
/*
<----------- *** -------------->
         sicurezza.php
             ***
Script per proteggere le variabili
dai più comuni attacchi al sito
             ***
 created by Alessandro Beltramo
    mercoledì 8 settembre 2010
http://www.sitecity.altervista.org/
<----------- *** -------------->
*/

//Per evitare le sql injection e che venga eseguito codice malevolo sul sito
//converte i caratteri speciali e i caratteri html nel loro corrispondente esadecimale
//ad esempio: ' diventa &#039;

function sqli($dato){
$dato=htmlentities($dato, ENT_QUOTES);
$dato=addslashes($dato);
return $dato;
}

//per criptare le password (sarebbe più sicuro fare md5(md5($dato)); oppure utilizzare un'altro algoritmo

function criptare($dato){
$dato=md5($dato);
return $dato;
}

//trasforma tutti i dati in minuscolo

function minuscolo ($dato) {
$dato=strtolower($dato);
return $dato;

}
?>