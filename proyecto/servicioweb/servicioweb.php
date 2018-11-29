<?php
    include 'clsusuarios.class.php';
	$soap = new SoapServer(null, array('uri' => 'http://localhost/'));
	$soap -> setClass('clsusuarios');
	$soap -> handle();
?>