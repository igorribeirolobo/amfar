<?php require 'header_and_menu.php'; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Painel Administrativo</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-12">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Olá <?php echo $nome_usuario; ?>.</h4>
            <p>Este painel foi desenvolvido com as linguagens mais atuais do mercado e com um layout que se adapta em diversas resoluções de tablet's, notebooks e computadores. <br />
                Com ele terá total autonomia para editar todos os conteúdos do seu site de forma simples, rápida e fácil.
                <br />
                Estamos sempre trabalhando para melhorar este sistema e esperamos que aprecie.</p>
        </div>
</div>
        <div class="clearfix"></div>
        
        <div class="col-md-12">
          <div class="box box-solid">
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="http://valloritecnologia.com.br/img/slides/slide1.fw.png" alt="First slide">
                  </div>
                  <div class="item">
                    <img src="http://valloritecnologia.com.br/img/slides/slide2.fw.png" alt="Second slide">
                  </div>
                  <div class="item">
                    <img src="http://valloritecnologia.com.br/img/slides/slide3.fw.png" alt="Third slide">
                  </div>
                  <div class="item">
                    <img src="http://valloritecnologia.com.br/img/slides/slide4.fw.png" alt="Third slide">
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="clearfix"></div>
      </div>
    </section>
</div>
<?php require 'footer.php'; ?>
