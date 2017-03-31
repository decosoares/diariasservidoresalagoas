<div class="x_panel">
  <div class="x_title">
    <h2>Orçamento Durante o Ano</h2>
    <ul class="nav navbar-right panel_toolbox">
      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>
      <li><a class="close-link"><i class="fa fa-close"></i></a>
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content" style="display: block;">
    <table id="table_padrao" class="table table-hover">
      <thead>
        <tr>
          <th>Mês</th>
          <th>Valor Inicial</th>
          <th>Valor Atualizado</th>
          <th>Valor Empenhado</th>
          <th>Valor Liquidado</th>
          <th>Valor Pago</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>

  </div>
</div>

<script>
addTableRow = function(dados) {

    var newRow = $("<tr>");
    var cols = "";

    cols += '<td>'+ dados.mes +'</td>';
    cols += '<td>'+ dados.vl_inicial +'</td>';
    cols += '<td>'+ dados.vl_atualizado +'</td>';
    cols += '<td>'+ dados.vl_empenhado +'</td>';
    cols += '<td>'+ dados.vl_liquidado +'</td>';
    cols += '<td>'+ dados.vl_pago +'</td>';

    newRow.append(cols);
    $("#table_padrao").append(newRow);

    return false;
  };
  $(document).ready(function() {
    var resultado = JSON.parse('<?php echo $resposta ?>');
    for(var i = 0; i < resultado.results.length; i++){
      addTableRow(resultado.results[i]);
      console.log(resultado.results[i]);
    }

    console.log(resultado);
  });
</script>
