<?php
/* Conexión BD */
$link = mysqli_connect("localhost", "root", "", "topciment");

// Prueba conexión
if ($link === false) {
    die("ERROR: No se puede conectar. " . mysqli_connect_error());
}




// Consulta
$sql = "SELECT alternate, hreflang FROM alternates WHERE href='https://www.topciment.com/it/notizia/6 motivi-per-cui-i-bagni-in-microcemento-saranno-di-tendenza'";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {

            echo "<link>" . $row['alternate'] . "</link>";

           

?>

            <p>............</p>

         

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