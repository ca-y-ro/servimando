<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
    $f = $_GET["file"];
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"$f\"\n");
    $fp=fopen($f, "r");
    fpassthru($fp);
?> 
</body>
</html>