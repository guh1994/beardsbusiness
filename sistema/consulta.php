<?php
// session_start();
include_once('superior.php');
// require 'src/conecta.php';

// $cod =  $_SESSION['user']['id'];
// 
?>


<div class="content">

	<div class="container-fluid" >

		<div class="card" id="lancamento">

			<div class="content">

				<div class="row"><!-- CONTENT Consulta -->
					<div class="col-md-6">
						<div class="form-group">
							<label>CPF</label>
							<input type="text" value="" class="form-control border-input" id="cmbEmpresaConsulta" />
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Data Inicial</label>
							<input type="date" class="form-control border-input" id="dataInicial" value = "<?php echo date('Y-m-d');?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Data Final</label>
							<input type="date" class="form-control border-input" id="dataFinal" value = "<?php echo date('Y-m-d');?>">
						</div>
					</div>
				</div>
				<div class="text-center" style="margin-top: 20px; margin-bottom: 20px;">
					<button class="btn btn-info btn-fill btn-wd" id="" onclick="consultar()">Consultar</button>
				</div>

				<div class="form-group">
					<output type="text" class="text-center" id="retornoConsulta">Teste</output>
				</div>
			</div>
			<div class="content"> <!-- Content Tabela -->
				<div class="table-responsive">
					<table class="table table-bordered table-striped text-center" width="100%" id="table" cellspacing="0">
						<thead>
							<tr>
								<th hidden>Código</th>
								<th>Empresa</th>
								<th>Assessor</th>
								<th>Tipo Operação</th>
								<th>Valor</th>
								<th>Data Venda</th>
								<th>Status</th>
								<th>Atualizado Por</th>
								<th>Data e Hora da atualização</th>
								<th>Editar</th>

							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Exibir mensagem</button></td>
							</tr>

						</thead>

						<tbody id="tableConsulta">


						</tbody>
					</table>
				</div>
			</div><!-- Content Tabela-->

		</div><!-- Content Lancamento-->
	</div> <!-- CONTAINER FLUID -->
</div> <!-- CONTAINER -->


<?php include_once('inferior.php');?>

<script src = "js/crudAjaxLancamento.js"></script>

<script src = "js/jquery.maskMoney.min.js"></script>

<script src = "js/interatividades.js"></script>


<script>

	$("#txtValor").maskMoney({prefix:'R$', allowNegative: true, thousands:'.', decimal:',', affixesStay: true});
	$("#txtValorPago").maskMoney({prefix:'R$', allowNegative: true, thousands:'.', decimal:',', affixesStay: true});


</script>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Cliente</h4>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-primary">Salvar mudanças</button>
			</div>
		</div>
	</div>
</div>
<!-- FIM MODAL -->

<!-- .......................................................................................... -->



<!-- <div class="text-center botoes">
<button type="submit" class="btn btn-info btn-fill btn-wd botao active" id="formReceita" onclick="fnHideFormFinancas(this.id)">RECEITA</button>
<button type="submit" class="btn btn-info btn-fill btn-wd botao" id="formDespesa" onclick="fnHideFormFinancas(this.id); document.all.formReceita.setAttribute('class', 'btn btn-info btn-fill btn-wd botao')">DESPESA</button>

</div> -->


