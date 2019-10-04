<?php 

include_once('superior.php');

?>


<div class="content">

	<div class="container-fluid" >


		<ul class="nav nav-pills NavegadorSuperior">
			<li class="active" id = "lancamento">
				<a href="#"><span class="ti-server"></span> Cliente</a>
			</li>
			<!-- 
			<li class="" id="categ" onclick="fnMenuFinancas(this)">
				<a href="#"><span class="ti-bookmark"></span> Categoria</a>
			</li>
		-->
	</ul>

	<div class="row" id="rowCliente"> <!-- ROW CLIENTE -->
		<div class="col-lg-12 col-md-12">



			<div class="card">
				<div class="header">
					<h4 class="title">Cliente</h4>
				</div>

				<div class="content">

					<form id="">

						<div class="row">

							<div class="col-md-6">
								<div class="form-group">
									<label><span id = "cmpObrgt">* </span>Nome</label>
									<input type="text" class="form-control border-input" name="CliNome" id="CliNome" placeholder="Nome">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label><span id = "cmpObrgt">* </span>CPF</label>
									<input type="text" class="form-control border-input" name="CliCPF" id="CliCPF" placeholder="000.000.000-00" >
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for=""><span id = "cmpObrgt">* </span>Assessor</label>
									<select value="" class="form-control border-input" name="CliAssessor" id="CliAssessor">
										<option value="">Selecione...</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label><span id = "cmpObrgt">* </span>Beneficio</label>
									<input type="text" class="form-control border-input" name="CliBN" id="CliBN" placeholder="000.000.000-0" >
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>Especie</label>
									<input type="text" class="form-control border-input" name="CliEspecie" id="CliEspecie" placeholder="41" >
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>UF</label>
									<select value="" class="form-control border-input" name="CliUF" id="CliUF">
										<option value="">Selecione...</option>
									</select>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label>Cidade</label>
									<select value="" class="form-control border-input" name="CliCidade" id="CliCidade" disabled>
										<option value="">Selecione...</option>
									</select>
								</div>
							</div>

						</div>

						
						<!-- </div><div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label><span id = "cmpObrgt">* </span>Nome Mãe</label>
									<input type="text" class="form-control border-input" name="CliNomeMae" id="CliNomeMae" placeholder="Nome da Mãe">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label><span id = "cmpObrgt">* </span>Nome Pai</label>
									<input type="text" class="form-control border-input" name="CliNomePai" id="" placeholder="Nome do Pai">
								</div>
							</div> -->
							<!-- <div class="col-md-2">
								<div class="form-group">
									<label><span id = "cmpObrgt">* </span>CEP</label>
									<input type="text" class="form-control border-input" name="CLICEP" id="CLICEP" placeholder="00000-000">
								</div>
							</div>
							<div class="col-md-7">
								<div class="form-group">
									<label><span id = "cmpObrgt">* </span>Logradouro</label>
									<input type="text" class="form-control border-input" name="CliLogradouro" id="CliLogradouro" placeholder="Rua Antonio Nunes">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label><span id = "cmpObrgt">* </span>Numero</label>
									<input type="text" class="form-control border-input" name="CliNumeroEnd" id="CliNumeroEnd" placeholder="1234">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Bairro</label>
									<input type="text" class="form-control border-input" name="CliBairroEnd" id="CliBairroEnd" placeholder="Bairro">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>Complemento</label>
									<input type="text" class="form-control border-input" name="CliComplementoEnd" id="" placeholder="CliComplementoEnd">
								</div>
							</div> -->
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for=""><span id = "cmpObrgt">* </span>Tipo da Conta</label>
										<select value="" class="form-control border-input" name="CliTipoConta" id="CliTipoConta">
											<option value="Selecione">Selecione...</option>
											<option value="OP">OP</option>
											<option value="CC">Corrente</option>
											<option value="CP">Poupança</option>
										</select>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group">
										<label>Banco</label>
										<input type="text" class="form-control border-input" placeholder="Itaú" name="CliBancoConta" id="CliBancoConta" >
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group">
										<label>Agência</label>
										<input type="text" class="form-control border-input" placeholder="5607" name="CliAgenciaConta" id="CliAgenciaConta" >
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group">
										<label>Conta</label>
										<input type="text" class="form-control border-input" placeholder="00657-3" name="CliConta" id="CliConta" >
									</div>
								</div>
							</div>
							<div class="row">

							<!-- <div class="col-md-2">
								<div class="form-group">
									<label>Valor</label>
									<input type="text" class="form-control border-input" placeholder="R$ 1.234,56" name="CliValorNegociacao" id="CliValorNegociacao" >
								</div>
							</div> -->
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Operação</label>
									<select value="" class="form-control border-input" name="CliTipoOperacao" id="CliTipoOperacao">
										<option value="Selecione">Selecione...</option>
										<option value="CC">Cartão Comum</option>
										<option value="CS">Cartão com Saque</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Banco</label>
									<select value="" class="form-control border-input" name="CliBancoNegociacao" id="CliBancoNegociacao">
										<option value="Selecione">Selecione...</option>
										<option value="bmg">BMG</option>
										<option value="bgn">CETELEM</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Promotora</label>
									<select value="" class="form-control border-input" name="CliPromotoraNegociacao" id="CliPromotoraNegociacao">
										<option value="Selecione">Selecione...</option>
										<option value="spi">SPI</option>
										<option value="cf">CF</option>
										<option value="gft">GFT</option>
									</select>
								</div>
							</div>
							<!-- <div class="col-md-4">
								<div class="form-group">
									<label for="">Esteira</label>
									<select value="" class="form-control border-input" name="CliPromotoraNegociacao" id="CliPromotoraNegociacao">
										<option value="Selecione">Selecione...</option>
									</select>
								</div>
							</div> -->
						</div>
					</form>

					<div class="row">
						<div class="text-center">
							<button  class="btn btn-info btn-fill btn-wd" name="BtnCadastraCli" id="BtnCadastraCli" >Cadastrar</button>

							<button  class="btn btn-info btn-fill btn-wd danger" name="BtnCancelaCli" id="BtnCancelaCli">Cancelar</button>
						</div>
					</div>

					<div class="row">

						<div class="col-md-12">
							<div class="form-group">
								<output type="text" class="text-center" name="CliRetornoInformacao" id="CliRetornoInformacao"></output>
							</div>
						</div>
					</div>
				</div> <!--CONTENT CADASTRO -->
			</div> <!--CARD -->
		</div> <!-- COL -->
	</div> <!-- ROW CLIENTE -->
</div><!-- </div> CONTENT FLUID -->
</div> <!-- CONTENT -->





<?php include_once('inferior.php');?>


<script src = "js/interatividades.js"></script>
<script src = "js/crudAjaxCadastro.js"></script>

<script src="js/jquery-3.2.1.js" type="text/javascript"></script>

<script>
	var $JQ = jQuery.noConflict();    
</script>

<script src="js/jquery.maskMoney.min.js"></script>
<script src="js/jquery.mask.js"></script>



<script>
	var options = {
		onKeyPress: function (cpf, ev, el, op) {
			var masks = ['000.000.000-00', '0000.000.000-00'],
			mask = (cpf.length > 14) ? masks[1] : masks[0];
			el.mask(mask, op);
		}
	}

	$JQ('#CliCPF').mask('000.000.000-00', options);


	var options2 = {
		onKeyPress: function (cpf, ev, el, op) {
			var masks = ['(00) 0000-00000', '(00) 00000-0000'],
			mask = (cpf.length > 14) ? masks[1] : masks[0];
			el.mask(mask, op);
		}
	}

	$JQ('#CliTel').mask('(00) 0000-00000', options2);

	var options2 = {
		onKeyPress: function (cpf, ev, el, op) {
			var masks = ['(00) 0000-00000', '(00) 00000-0000'],
			mask = (cpf.length > 14) ? masks[1] : masks[0];
			el.mask(mask, op);
		}
	}

	$JQ('#CliCel').mask('(00) 00000-0000', options2);

	var options = {
		onKeyPress: function (cpf, ev, el, op) {
			var masks = ['000.000.000-0', '0000.000.000-0'],
			mask = (cpf.length > 14) ? masks[1] : masks[0];
			el.mask(mask, op);
		}
	}

	$JQ('#CliBN').mask('000.000.000-0', options);

	var options = {
		onKeyPress: function (cpf, ev, el, op) {
			var masks = ['00000-000', '00000-000'],
			mask = (cpf.length > 14) ? masks[1] : masks[0];
			el.mask(mask, op);
		}
	}

	$JQ('#CLICEP').mask('00000-000', options);
</script>
