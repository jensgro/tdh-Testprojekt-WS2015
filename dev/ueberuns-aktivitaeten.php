<?php
  $pagetitle= "Über uns - Unsere Aktivitäten";

  $navigation = "aktivitaeten";

	$pageheadline ="Unsere Aktivitäten";

	$contentleftincludes = array(
    'aktivitaeten.inc',
    'accordion.inc'
	);

	$contentrightincludes = array(
    'presented.inc'
	);

	$sideincludes = array(
		'contact-person-deppisch.inc',
		'contact-person-wolf.inc'
	);

	include 'inc/templates/template-2-1.inc';
?>
