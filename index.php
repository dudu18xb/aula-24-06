<!DOCTYPE html>
<html>
<head>
	<title>Auto Complete</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/easy-autocomplete.min.css">
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.easy-autocomplete.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			// conjunto  de opção
			var options = {
				// arquivo que sera consultado
				url: "alunos.json",
				// o valor que vc ira buscar
				getValue: "nome",
				// opção de listagem
				list: {
					match: {
						enabled: true
					}
				}
			};
			// aplica o easy-autocomplete
			$("#nome").easyAutocomplete(options);

			// aplica o easy-autocomplete
			$("#dinamico").easyAutocomplete(options);

			// conjunto  de opção
			var options = {
				// arquivo que sera consultado
				url: "alunos2.php",
				// o valor que vc ira buscar
				getValue: function(element){
					// retorna o elemento
					return element.nome;
				},
				// opção de listagem
				list: {
					onSelectItemEvent: function(){
						var selectItemValue = $("#aluno").getSelectedItemData().ra;
						$("#id").val(selectItemValue).trigger("change");
					},
					match: {
						enabled: true
					}
				}
			};
			// aplica o easy-autocomplete
			$("#aluno").easyAutocomplete(options);
		})
	</script>

</head>
<body>
	<div class="container">
		<h1>Exemplo de Autocomplete</h1>

		<input type="text" name="nome" id="nome" class="form-control" placeholder="Digite Um nome"></input>

		<h1> Exemplo 2 com JSON Dinâmico</h1>

		<input type="text" name="nome" id="dinamico" class="form-control" placeholder="Digite Um nome"></input>

		<h1>Exemplo 3 - Trazendo outros dados</h1>

		<div class="row">
			<div class="col-md-2">
				<input type="text" name="id" id="id" class="form-control" readonly placeholder="RA do Aluno"></input>
			</div>
			<div class="col-md-10">
				<input type="text" name="nome" id="aluno" class="form-control" placeholder="Digite Um nome"></input>
			</div>
		</div>


	</div>

</body>
</html>
