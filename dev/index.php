<?php
	$pagetitle= "Willkommen bei terre des hommes Murgtal/Mittelbaden";
	$pageheadline ="Hier kommt eine tolle Headline hin!";

	$navigation = "standard";

	// leer.inc ist nur ein Platzhalter, der gelöscht werden muss.
	$contentleftincludes = array(
	   'thanks.inc',
	   'leer.inc'
	);

	$contentrightincludes = array(
	   'leer.inc',
	   'leer.inc'
	);

  $sideincludes = array(
	   'donation-buttons.inc',
	   'contact-person-deppisch.inc',
        'contact-person-wolf.inc'
	);

	// Auf manchen Seiten wird dieses Array benötigt.
	// $topcontent = array(
	// 	'leer.inc'
	// );

	// Auf manchen Seiten wird dieses Array benötigt.
	// $artikelincludes = array(
	// 			'leer.inc'
	// );

	// Auf manchen Seiten wird dieses Array benötigt.
	// $widecontent = array(
	// 			'leer.inc'
	// );

	include 'inc/templates/template-2-1.inc';
?>
