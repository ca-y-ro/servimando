<?php
header("Content-disposition: attachment; filename=instrucciones.pdf");
header("Content-type: application/pdf");
readfile("instrucciones.pdf");
?>
