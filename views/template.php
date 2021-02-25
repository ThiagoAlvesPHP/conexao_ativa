<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=320px">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="<?=BASE; ?>">
    <meta property="ia:markup_url" content="<?=BASE; ?>">
    
    <meta property="fb:app_id" content="2637777939570041">
    <title>Conexão Ativa</title>
    <link rel="icon" href="<?=BASE; ?>assets/img/favicon.png ?>" type="image/x-icon"/>
    <meta property="og:title" content="Conexão Ativa">
    <meta property="og:description" content="Seu provedor de internet">

    <meta property="og:image" content="<?=BASE; ?>assets/img/favicon.png">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">

    <meta property="og:type" content="website">
    <meta name="robots" content="noindex">
    <meta name="robots" content="index, follow">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Albicod">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE; ?>assets/css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?=BASE; ?>/assets/css/styles.css" type="text/css" />
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <ul class="nav navbar-nav menu">
            <a class="navbar-brand logo1" href="<?=BASE; ?>">
                <img class="img img-responsive" src="<?=BASE; ?>assets/img/logo.webp">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#planos" class="dropdown-toggle"><b>PLANOS</b></a>
            </li>
            <li class="dropdown">
              <a href="#duvidas" class="dropdown-toggle"><b>DÚVIDAS FREQUENTES</b></a>
            </li>
            <li class="dropdown">
              <a href="<?=BASE; ?>contato" class="dropdown-toggle"><b>CONTATO</b></a>
            </li>
            <li class="dropdown">
              <a href="https://ixc.conexaoativatelecom.com/central_assinante_web/login" class="dropdown-toggle btn btn-primary btn-central" target="_blank">
                <b>
                  <i class="fas fa-user"></i> CENTRAL DO ASSINANTE
                </b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <img src="<?=BASE; ?>assets/img/logo.webp" class="img img-responsive"><br>
            <i class="fab fa-facebook-square"></i> | 
            <i class="fab fa-instagram"></i>
            <a href="http://speed.conexaoativatelecom.com/" class="btn btn-primary btn-block velocimetro" target="_blank">VELOCIMETRO</a>
          </div>
          <div class="col-sm-3">
            <p>
              Tel Fixo: (79) 3254-5476<br>
              Celular: (79) 9.9688-7061<br>
              Celular: (79) 9.8825-4727<br>
              <span>Segunda à Sexta (08:00am às 20:00pm)</span><br>
              <span>Sábado (08:00am às 20:00pm)</span><br>
              <span>Domingo (09:00am às 13:00pm)</span>
            </p>
          </div>
          <div class="col-sm-3">
            <p>
              E-mail: conexaoativa@hotmail.com<br>
              <span>Web: www.conexaoativatelecom.com</span><hr>
              Rua 164 Sala 02 Conjunto Albano Franco<br>
                <span>Nossa Senhora do Socorro - SE</span>
            </p>
          </div>
          <div class="col-sm-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.675433161337!2d-37.0671331553095!3d-10.834122319116299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7054dc11a384a71%3A0x4f1fb27006c28bb!2sCONEX%C3%83O+ATIVA!5e0!3m2!1sen!2sbr!4v1547202531901" width="100%" height="200px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <hr>
        <div class="row footer-fim">
          <div class="col-sm-6">
            Copyrights © <?=date('Y'); ?> - Todos os direitos reservados
          </div>
          <div class="col-sm-6 text-right">
            Construido pela <a href="https://www.albicod.com/" target="_blank">Albicod</a>
          </div>
        </div>
      </div>
    </div>

    <!-- AQUI COLOCAREMOS O FOOTER -->
    <script type="text/javascript" src="<?=BASE; ?>assets/js/config.js"></script>
    <script type="text/javascript" src="<?=BASE; ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=BASE; ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=BASE; ?>assets/js/jquery.mask.js"></script>
    <script type="text/javascript" src="<?=BASE; ?>assets/js/scripts.js"></script>
  </body>
</html>