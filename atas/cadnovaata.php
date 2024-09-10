<?php
include 'conecta.php';
$inicio = $_POST['inicio'];
$fim = $_POST['fim'];
$setor = $_POST['setor'];
$titulo = $_POST['titulo'];
$pauta = $_POST['pauta'];
$descricao = $_POST['descricao'];
$tipo = $_POST['tipo'];
$palavraChave = $_POST['palavraChave'];
$tipo = $_POST['tipo'];
$setor = $_POST['setor'];
$status = "Em processo de emissão";
$dataEmissao = date("Y/m/d");
$sql = "INSERT INTO ata(dataEmissao,inicio,termino,titulo,pauta,descricao,tipo,palavraChave,status,setor) VALUES ('$dataEmissao','$inicio','$fim','$titulo','$pauta','$descricao','$tipo','$palavraChave','$status','$setor')";
if (mysqli_query($mysqli, $sql)) {
    echo "<script language='javascript' type='text/javascript'>
            window.location.href='index.php';
            </script>";
}

mysqli_close($mysqli);
