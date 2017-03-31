<div class="page-title">
  <div class="title_left">
    <h3>Orçamento Anual</h3>
  </div>

  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
      <div class="input-group">
        <input id="year" type="number" class="form-control" placeholder="Informe o ano">
        <span class="input-group-btn">
          <button id="year_search" class="btn btn-default" type="button">OK</button>
        </span>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_content">

      </div>
    </div>
  </div>
</div>
<div id="div_table" class="row">
  <?php echo $this->element('table_padrao'); ?>
</div>


<script>

$(document).ready(function() {
  $('#year_search').click(function() {
    alert($('#year').val());
  });
});

</script>
