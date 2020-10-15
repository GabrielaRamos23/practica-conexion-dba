<?php 
	$gaby = new mysqli("localhost","root","","dba");
	if ($gaby) {
		print 'Well done!';
		# code...
	} else {
		print 'mal conectado';
	}

?>