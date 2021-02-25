<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php for ($i=0; $i < count($carousel); $i++): ?>
      <li data-target="#myCarousel" data-slide-to="<?=$i; ?>" <?=($i == 0)?'class="active"':''; ?>></li>
    <?php endfor; ?>
  </ol>

  <div class="carousel-inner">
    <?php foreach ($carousel as $key => $value): ?>
      <div class="item <?=($key == 0)?'active':''; ?>">
        <img src="<?=BASE.'assets/img/carousel/'.$value['imagem']; ?>" alt="Conexão Ativa">
      </div>
    <?php endforeach; ?>
  </div>

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr>
<div class="container">
  <div class="row" id="planos">
    <?php foreach ($planos as $p): ?>
      <div class="col-sm-3 text-center planos">
        <h4>INTERNET - PLANOS</h4>
        <hr>
        <div class="card card-price alert alert-<?=$p['cor']; ?>">
          <div class="card-img">
            <div class="card-caption">
              <span class="h2">
                <b><?=$p['plano']; ?> Mega</b>
              </span>
            </div>
          </div>
          <div class="card-body">
            <div class="price">R$<?=number_format($p['valor'], 2, ',', '.'); ?></div>
            <hr>
            <a href="#" class="btn btn-primary btn-lg btn-block buy-now" data-toggle="modal" data-target="#plano<?=$p['id']; ?>">
              Assine Já
            </a>

            <div id="plano<?=$p['id']; ?>" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="<?=BASE.'home/whatsapp'; ?>" target="_blank">
                      <textarea name="texto" class="form-control" readonly="">Eu quero assinar o plano <?=$p['plano']; ?> Mega</textarea><br>
                      <input type="text" name="cliente" class="form-control" required="" placeholder="Qual seu nome?">
                      <br>
                      <button class="btn btn-success btn-block btn-lg">Assinar</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
        <br>
      </div>
    <?php endforeach; ?>
  </div>
  <hr>
  <div class="row" id="duvidas">
    <div class="col-sm-6">
      <h3>Confira as principais dúvidas sobre os serviços da Conexão Ativa.</h3>
    </div>
    <div class="col-sm-6">
      <?php foreach ($duvidas as $d): ?>
        <div class="panel-group" id="duvida<?=$d['id']; ?>">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#duvida<?=$d['id']; ?>" href="#duvidas<?=$d['id']; ?>">
                <?=$d['titulo']; ?></a>
              </h4>
            </div>
            <div id="duvidas<?=$d['id']; ?>" class="panel-collapse collapse">
              <div class="panel-body"><?=$d['texto']; ?></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <hr>
</div>
