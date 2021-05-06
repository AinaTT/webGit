<?php
/* Conexión BD */
$link = mysqli_connect("localhost", "root", "", "topciment");

// Prueba conexión
if ($link === false) {
    die("ERROR: No se puede conectar. " . mysqli_connect_error());
}

$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$urlactual = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
//echo $escaped_url; echo "<br>";

// Consulta SELECT alternates.alternate FROM alternates INNER JOIN pagina ON pagina.nombre=alternates.href WHERE pagina.nombre = "https://www.topciment.com/es/noticia/6-razones-banos-microcemento-seran-tendencia";
//$sql = 'SELECT alternate, hreflang FROM alternates WHERE href="' . $urlactual . '"';
//SELECT * FROM `alternate` where `en-GB`='https://www.topciment.com/en/new/6-reasons-why-microcement-bathrooms-will-be-a-trend-in-2021'
$sql = 'SELECT alternates.alternate, alternates.hreflang FROM alternates INNER JOIN pagina ON pagina.nombre=alternates.href WHERE pagina.nombre="' . $urlactual . '"';
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {

            echo "<link rel='alternate' href='" . $row['alternate'] . "' hreflang='" . $row['hreflang'] . "' />" ;

?>         

<?php }
        // Resultado
        mysqli_free_result($result);
    } else {
        echo "No se han encontrado registros que coincidan con la consulta.";
    }
} else {
    echo "ERROR: No se puede ejecutar $sql. " . mysqli_error($link);
}

// Cerrar conexión
mysqli_close($link);
?>