<!DOCTYPE html>
<html lang="pt-br">

<head>
	<style>
		.modal-dialog {
			max-width: 800px !important;
		}
	</style>
	<meta charset="utf-8">
	<meta http-equiv="content-language" content="pt-br">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ATAS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
		<div class="row justify-content-center row-cols-3 row-cols-md-3 mb-3 text-center">
			<div class="card-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">TITULO</th>
							<th scope="col">INÍCIO</th>
							<th scope="col">TERMINO</th>
							<th scope="col">PAUTA</th>
							<th scope="col">PALAVRAS CHAVES</th>
							<th scope="col">TIPO</th>
							<th scope="col">STATUS</th>
							<th scope="col">AÇÕES</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include 'conecta.php';
						$pesquisa = mysqli_query($mysqli, "SELECT * FROM ata");
						$row = mysqli_num_rows($pesquisa);
						if ($row > 0) {
							while ($registro = $pesquisa->fetch_array()) {
								$id = $registro['id'];
								echo "<tr>";
								echo "<td>" . $registro['id'] . "</td>";
								echo "<td>" . $registro['titulo'] . "</td>";
								echo "<td>" . $registro['inicio'] . "</td>";
								echo "<td>" . $registro['termino'] . "</td>";
								echo "<td>" . $registro['pauta'] . "</td>";
								echo "<td>" . $registro['palavraChave'] . "</td>";
								echo "<td>" . $registro['tipo'] . "</td>";
								echo "<td>" . $registro['status'] . "</td>";
								echo "<td><a href='editaata.php?id=$id' data-bs-toggle='modal' data-bs-target='#exampleModal1$id' data-id='$id'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                                    </svg></a> | <a href='excluiata.php?id=$id'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='red' class='bi bi-trash' viewBox='0 0 16 16'>
                                    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
                                    <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
                                    </svg></a></td>";
								echo "</tr>";
								echo "<div class='modal fade' id='exampleModal1$id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                      <div class='modal-content'>
                                        <div class='modal-header'>
                                          <h5 class='modal-title' id='exampleModalLabel'>Edição de ATAS</h5>
                                          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <div class='modal-body text-start'>";
								include 'editaata.php';
								echo "</div>
                                        <div class='modal-footer'>
                                          <button type='button' class='btn btn-outline-danger' data-bs-dismiss='modal'>Fechar</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>";
							}
						} else {
							echo "Não existem atas cadastrados!";
						}
						?>
					</tbody>
				</table>
			</div>

		</div>
	</div>
</body>

</html>