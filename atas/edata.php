<?php
include 'conecta.php';
$id = $_GET['id'];
$inicio = $_POST['inicio'];
$fim = $_POST['fim'];
$setor = $_POST['setor'];
$titulo = $_POST['titulo'];
$pauta = $_POST['pauta'];
$descricao = $_POST['descricao'];
$tipo = $_POST['tipo'];
$palavraChave = $_POST['palavraChave'];
$status = $_POST['status'];
$sql = "UPDATE ata SET inicio=?,termino=?,setor=?,titulo=?,pauta=?,descricao=?,tipo=?, palavraChave=?, status=? WHERE id=?";
$edu = $mysqli->prepare($sql) or die($mysqli->error);
if (!$edu) {
    echo "Erro:" . $mysqli->error;
}
$edu->bind_param('sssssssssi', $inicio, $fim, $setor, $titulo, $pauta, $descricao, $tipo, $palavraChave, $status, $id);
$edu->execute();
$edu->close();
header("Location: index.php");
