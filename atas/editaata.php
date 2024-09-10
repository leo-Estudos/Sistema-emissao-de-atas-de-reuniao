<?php
include 'conecta.php';
$id = $id;
$sql = "SELECT * FROM ata WHERE id=$id";
$query = $mysqli->query($sql);
while ($dados = $query->fetch_array()) {
    $inicio = $dados['inicio'];
    $fim = $dados['termino'];
    $pauta = $dados['pauta'];
    $descricao = $dados['descricao'];
    $palavraChave = $dados['palavraChave'];
    $tipo = $dados['tipo'];
    $status = $dados['status'];
    $setor = $dados['setor'];
    $titulo = $dados['titulo'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#inicio2").datepicker({
                dateFormat: "yy-mm-dd"
            });
            $("#fim2").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>
</head>

<body>
    <form action="edata.php?id=<?php echo $id; ?>" method="post">
        <div class="col-12">
            <label class="form-label">Status</label>
            <select class="form-control form-select" name="status">
                <option selected value="<?php echo $status; ?>"><?php echo $status; ?></option>
                <option value="Em processo de emissão">Em processo de emissão</option>
                <option value="Em processo de revisão">Em processo de revisão</option>
                <option value="Em processo de conclusão">Em processo de conclusão</option>
                <option value="Emitida">Emitida</option>
            </select>
        </div>
        <div class="row">
            <div class="col-3">
                <label class="form-label">Início</label>
                <input class="form-control" value="<?php echo $inicio; ?>" type="text" name="inicio" id="inicio" placeholder="Início" />
            </div>

            <div class="col-3">
                <label class="form-label">Fim</label>
                <input class="form-control" value="<?php echo $fim; ?>" type="text" name="fim" id="fim" placeholder="Fim" />
            </div>
            <div class="col-6">
                <label class="form-label">Setor</label>
                <select class="form-control form-select" name="setor">
                    <option selected value="<?php echo $setor; ?>"><?php echo $setor; ?></option>
                    <option value="Setor 1">Setor 1</option>
                    <option value="Setor 4">Setor 4</option>
                    <option value="Setor 2">Setor 2</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Título</label>
                <input class="form-control" value="<?php echo $titulo; ?>" type="text" name="titulo" required placeholder="Titulo" />
            </div>
            <div class="col-12">
                <label class="form-label">Pauta</label>
                <input class="form-control" value="<?php echo $pauta; ?>" type="text" name="pauta" placeholder="Demonstrar aos participantes a forma de ..." />
            </div>
            <div class="col-12">
                <label class="form-label">Descrição</label>
                <textarea class="form-control" value="<?php echo $descricao; ?>" name="descricao"
                    aria-label="A reunião iniciou-se com o Sr. Ari fazendo uma explanação sobre ..."></textarea>
            </div>
            <div class="col-12">
                <label class="form-label">Tipo</label>
                <select class="form-control form-select" name="tipo">
                    <option selected value="<?php echo $tipo; ?>"><?php echo $tipo; ?></option>
                    <option value="Pública">Pública</option>
                    <option value="Privada">Privada</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Palavras Chaves</label>
                <input class="form-control" value="<?php echo $palavraChave; ?>" type="text" name="palavraChave" placeholder="Palavras chaves" />
                <br />
            </div>


            <!-- <h5 class="form-label">PARTICIPANTES</h5>
				<div class="col-2">
					<label class="form-label">Matrícula</label>
					<input class="form-control" type="text" name="matricula" placeholder="Matrícula" />
				</div>
				<div class="col-2">
					<button type="button" class="btn btn-secondary">Pesquisar</button>
				</div>
				<div class="col-6">
					<label class="form-label">Nome</label>
					<input class="form-control" type="text" name="nome" placeholder="Nome" />
				</div>
				<div class="col-2">
					<button type="button" class="btn btn-secondary">Incluir</button>
				</div> -->
        </div>
        <br />
        <br />

        <div class="row center">
            <input type="submit" class="btn btn-outline-success" value="ATUALIZAR" />

        </div>
    </form>
</body>

</html>