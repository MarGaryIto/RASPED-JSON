<?php /*Script creado por XaviGonzalez http://xavigonzalez.net para crear eventos en Google Calendar con cualquier contenido, y enviado por SMS Gratuitamente. */ $quien=$_POST['title'];
$sms=$_POST['mensaje']; 
$title="SMS de $quien";
$where= "$sms";
$desc="Esto fue enviado por SMS"; 
require_once 'Zend/Loader.php';
Zend_Loader::loadClass('Zend_Gdata');
Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
Zend_Loader::loadClass('Zend_Gdata_Calendar');
Zend_Loader::loadClass('Zend_Http_Client');
Zend_Loader::loadClass('Zend_Gdata_Extension_When');
// Parameters for ClientAuth authentication $service = Zend_Gdata_Calendar::AUTH_SERVICE_NAME;
$user = "TUCORREO@gmail.com";
$pass = "TUCONTRASEÑA"; // Crear una autentificacion de cliente HTTP
$client = Zend_Gdata_ClientLogin::getHttpClient($user, $pass, $service); // Crear una instancia en el servicio del Calendario
$service = new Zend_Gdata_Calendar($client); $data=date("Y-m-d");
$hora=date("H:i");
$startDate = $data;
$startTime = "$hora";
$endDate = $data;
$endTime = "$hora";
$tzOffset = "+01"; $gdataCal= new Zend_Gdata_Calendar($client);
$newEvent = $gdataCal->newEventEntry();
$newEvent->title = $gdataCal->newTitle($title);
$newEvent->where = array($gdataCal->newWhere($where));
$newEvent->content = $gdataCal->newContent("$desc");
$when=$gdataCal->newWhen(); $reminder = $service->newReminder();
$reminder->method = "sms";
$reminder->minutes = "59";
$when->reminders = array($reminder); 
$when->startTime="{$startDate}T{$startTime}:00.000{$tzOffset}:00";
$when->endTime="{$endDate}T{$endTime}:00.000{$tzOffset}:00";
$newEvent->when = array($when);
$createdEvent = $gdataCal->insertEvent($newEvent);

 ?>
