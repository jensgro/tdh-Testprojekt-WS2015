<?php
  $pagetitle= "Willkommen bei terre des hommes Murgtal/Mittelbaden";
  $pageheadline ="Helfen Sie mit!";

  $navigation = "helfen";

	$contentleftincludes = array(
	    'helfen-content-left.inc'
	);
	$contentrightincludes = array(
        'presented.inc'
	);
	$sideincludes = array(
		'donation-buttons.inc',
	   'contact-person-deppisch.inc',
        'contact-person-wolf.inc'
	);

	include 'inc/templates/template-2-1.inc';
?>
