<?php

/**
 *
 */
class HomeController extends AppController {

  public function index() {
    $servico = 'http://orcamento.dados.al.gov.br/api/v1/estado/2016/';
    $context = stream_context_create(array(
                'http' => array(
                    'method' => 'GET',
                    'header' => "Content-Type: application/json; charset=utf-8"
                )
            ));
    $retorno = file_get_contents($servico, null, $context);
    $this->set('resposta', $retorno);
  }

}
