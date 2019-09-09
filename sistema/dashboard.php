<?php
// session_start();
include_once('superior.php');
// require "src/conecta.php";

// $cod =  $_SESSION['user']['id'];
// $mes = array();
// $mes[] = "Mes";

// $mes[] = "Janeiro";
// $mes[] = 'Fevereiro';
// $mes[] = 'Março';
// $mes[] ='Abril';
// $mes[] ='Maio';
// $mes[] ='Junho';
// $mes[] ='Julho';
// $mes[] ='Agosto';
// $mes[] ='Setetembro';
// $mes[] ='Outubro';
// $mes[] ='Novembro';
// $mes[] ='Dezembro';

// $nMes = date('m');

// $cMes = $mes[ltrim($nMes, "0")];

// $dataAtual = date("d/m/Y");
?>

<div class="col-md-6 col-md-offset-3 text-center">
    <div class="form-group">
        <div class="header">
            <h4 class="title">Detalhes mensais por Empresa</h4>
        </div>

    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                    <i class="ti-server"></i>
                                </div>
                            </div>

                            <div class="col-xs-7">

                                <div class="numbers" id="receita">
                                    <p >Vendas</p>
                                    
                                    <p class='valores' id='vlrReceita' name='vlrReceita'></p>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-reload"></i>Vendidos no mês
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-success text-center">
                                <i class="ti-wallet"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers" id="despesa">
                                <p>Andamento</p>

                                <p class='valores' id='vlrDespesa' name='vlrDespesa'></p>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-calendar"></i>Contratos em andamento
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-danger text-center">
                                <i class="ti-pulse"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Pagos</p>
                                <p class='valores' id='caixa' name='caixa'></p>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-timer"></i> Contratos Pagos
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ROW DASHCAIXAS -->

    <!-- <div class="row">

        <div class="content">

            <div class="col-md-12">
                <div class="card">

                    <iframe src="grafico.php?codEmpresa=0" frameborder="0" id="iframeGrafico"></iframe>
                </div>
            </div>
        </div>
    </div> --> <!--ROW GRÁFICO-->

    <div class="row"> <!-- DESPESAS -->

        <div class="content">

            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Vendas</h4>
                    </div>
                    <div class="content">
                       <div class="table-responsive">
                          <table class="table table-bordered table-striped text-center " width="100%" id="tableDespesa" cellspacing="0">
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

                                </tr>
                            </thead>

                            <!-- <tbody id="corpoDespesa">


                            </tbody> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!--ROW DESPESAS -->

<!-- <div class="row">

    <div class="content">

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Andamento</h4>
                </div>
                <div class="content">
                   <div class="table-responsive">
                      <table class="table table-bordered table-striped text-center " width="100%" id="tableReceita" cellspacing="0">
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

                          </tr>
                      </thead>

                      <tbody id="corpoReceita">


                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
</div> ROW DESPESAS -->


</div> <!-- CONTENT -->
</div> <!-- FLUID -->



<!-- <script src="js/ajaxConsultaDashboard.js"></script>
<script src="js/ajaxConsultaDespesaDashboard.js"></script>
<script src="js/ajaxConsultaCaixaDashboard.js"></script> -->

<script src="js/CrudAjaxDashboard.js"></script>




<?php include_once('inferior.php');?>
