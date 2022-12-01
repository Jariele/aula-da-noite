<?php
require_once 'head.php';
require_once 'menu.php';
?>

<div class="container-fluid">
    <div class="row pecas">
        <div class="col-md-3">
            <div class="card" >
                <img class="card-img-top" src="imagens/vela.jfif" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">vela</h5>
                    <p class="card-text">A ngk e referencia no mercado de produtos automotivos.Vela de auto desempenho para veiculos flex.</p>
                    <p>R$80,00</p>
                   <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vela">
comprar
</button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="imagens/freio.jfif" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">freio</h5>
                    <p class="card-text">alto desempenho e energia para seu carro.</p>
                    <p>R$50,00</p>
                    <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#freios">
 comprar
</button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="imagens/armotecedor.jfif" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">amortecedor</h5>
                    <p class="card-text">alto desempenho e energia para seu carro. </p>
                    <p>R$150,00</p>
                   <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#amortecedor">
 comprar
</button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="imagens/bieneta.jfif" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">bieleta</h5>
                    <p class="card-text">bieleta -ande sempre com segurança e estabilidade.</p>
                    <p>R$100,00</p>
                    <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bieleta">
 comprar
</button>
                </div>
            </div>
        </div>


    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">vela</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">adicionar ao carinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="amortecedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">adicionar ao carinho</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="vela" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="imagens/vela.jfif">
<h4>velas<h4>
    <p>solucoes inteligentes para seu carro<p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">adicionar ao carinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="bieleta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">adicionar ao carinho</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="freios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">adicionar ao carinho</button>
      </div>
    </div>
  </div>
</div>





<?php
require_once 'footer.php';
?>