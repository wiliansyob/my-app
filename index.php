<?php
$headers = getallheaders();
$headersText = '';
foreach ($headers as $key => $value) {
    $headersText .= htmlspecialchars($key) . ": " . htmlspecialchars($value) . "\n";
}
?>
<?php
$domain = $_SERVER['HTTP_HOST'];
$ip = $_SERVER['REMOTE_ADDR'];
$serverIp = gethostbyname(gethostname());
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Información del Servidor</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="container">
        <h1>Información del Servidor</h1>
        <p>Dominio: <?php echo htmlspecialchars($domain); ?></p>
        <p>Nombre del Contenedor: <strong><?php echo htmlspecialchars(gethostname()); ?></strong></p>
        <p>IP del servidor: <?php echo htmlspecialchars($serverIp); ?></p>

        <p>Servidor que responde: nginx</p>

        <h2>Listado de cabeceras HTTP:</h2>
        <pre id="headers"><?php echo $headersText; ?></pre>
    </div>

</body>
</html>
