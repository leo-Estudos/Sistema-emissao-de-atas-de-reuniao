<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="content-language" content="pt-br">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ATAS</title>
  <style>
    .btn-secondary {
      margin-top: 30px;
      width: 100%;
    }

    .modal-dialog {
      max-width: 800px !important;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
  <script>
    $(function() {
      $("#inicio").datepicker({
        dateFormat: "yy-mm-dd"
      });
      $("#fim").datepicker({
        dateFormat: "yy-mm-dd"
      });
    });
  </script>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <div class="container">
    <h2><b>ATAS</b></h2>
    <nav>
      <?php
      include 'menu.php';
      ?>
    </nav>
    <br />
    <br />
    <form action="cadnovaata.php?id=<?php echo $id; ?>" method="post">
      <div class="row">
        <div class="col-3">
          <label class="form-label">Início</label>
          <input class="form-control" type="text" name="inicio" id="inicio" placeholder="Início" />
        </div>

        <div class="col-3">
          <label class="form-label">Fim</label>
          <input class="form-control" type="text" name="fim" id="fim" placeholder="Fim" />
        </div>
        <div class="col-6">
          <label class="form-label">Setor</label>
          <select class="form-control form-select" name="setor">
            <option value="Setor 1">Setor 1</option>
            <option value="Setor 4">Setor 4</option>
            <option value="Setor 2">Setor 2</option>
          </select>
        </div>
        <div class="col-12">
          <label class="form-label">Título</label>
          <input class="form-control" type="text" name="titulo" required placeholder="Titulo" />
        </div>
        <div class="col-12">
          <label class="form-label">Pauta</label>
          <input class="form-control" type="text" name="pauta" placeholder="Demonstrar aos participantes a forma de ..." />
        </div>
        <div class="col-12">
          <label class="form-label">Descrição</label>
          <textarea class="form-control" name="descricao"
            aria-label="A reunião iniciou-se com o Sr. Ari fazendo uma explanação sobre ..."></textarea>
        </div>
        <div class="col-12">
          <label class="form-label">Tipo</label>
          <select class="form-control form-select" name="tipo">
            <option value="Pública">Pública</option>
            <option value="Privada">Privada</option>
          </select>
        </div>
        <div class="col-12">
          <label class="form-label">Palavras Chaves</label>
          <input class="form-control" type="text" name="palavraChave" placeholder="Palavras chaves" />
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
        <input type="submit" class="btn btn-outline-success" value="EMITIR ATA" />

      </div>
    </form>
  </div>
</body>

</html>