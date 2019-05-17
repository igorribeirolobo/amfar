<?php include("menu.php"); ?>
<section class="slider" id="home">
    <div class="container-fluid">
        

        <!-- <div class="col-lg-4 col-md-4 col-sm-4">
            <a style="font-size: -webkit-xxx-large;" href="http://www.amfar.com.br/site/cursos/open/id/167/" >
                <img src="img/AMF - curso 2-mini.jpg" alt="" class="img-responsive">
            </a>
            <h4  style="color: #42b3e5;"> Datas : 14 e 15 de Outubro </h4>
             <a style="color: #42b3e5;" href="http://www.amfar.com.br/site/cursos/open/id/167/">
                 <button type="button" class="btn btn-info btn-lg">Mais Detalhes</button>
             </a>    
        </div> 
      
        <div class="row text-center"  >
            <div class="col-lg-6 col-md-6 col-sm-6 " >
                <a href="http://www.amfar.com.br/site/cursos/open/id/170/">      
                    <img src="img/5mini.jpg" class="img-responsive" alt="" style="margin: 0 auto;">
                </a>
                <h4 style="color: #42b3e5;">Módulo :</h4>
                <h4 style="color: #42b3e5;">USO DAS DIRETRIZES CLÍNICAS DE HIPERTENSÃO E DIABETES PARA TOMADA DE DECISÃO </h4>
                <h4 style="color: #42b3e5;"> Datas: 27 e 28 de Outubro </h4>
                <a style="font-size: -webkit-xxx-large; color: #42b3e5;" href="http://www.amfar.com.br/site/cursos/open/id/170/">
                    <button type="button" class="btn btn-info btn-lg">Mais Detalhes</button>
                </a>    
            </div>


            
            
             <div class="col-lg-6 col-md-6 col-sm-6">
                <a style="font-size: -webkit-xxx-large;" href="http://www.amfar.com.br/site/cursos/open/id/173/" >
                    <img src="img/6-mini.jpg" alt="" class="img-responsive"  style="margin: 0 auto;">
                </a>
                <h4 style="color: #42b3e5;">Módulo :  </h4>
                <h4 style="color: #42b3e5;">CASES DE SUCESSO - PRÁTICA CLÍNICA FARMACÊUTICA NO CONTEXTO HOSPITALAR </h4>
                <h4  style="color: #42b3e5;">Datas: 24 e 25 de Novembro   </h4>
                 <a style="color: #42b3e5;" href="http://www.amfar.com.br/site/cursos/open/id/173/">
                     <button type="button" class="btn btn-info btn-lg">Mais Detalhes</button>
                 </a>    
            </div>

        </div>
      
      -->


            <!-- <?php
            $i = 0;
            foreach ($slidehome as $sh) {
                ?> 
                <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="header-backup"></div>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo $sh->sh_imagem; ?>" alt="">
                            <div class="carousel-caption">
                                <h1><?php echo $sh->sh_titulo1; ?></h1>
                                <h1><?php echo $sh->sh_titulo2; ?></h1>
                                <p><?php echo $sh->sh_titulo3; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?> -->

            
        </div>
    </div>
</section><!-- end of slider section -->
<!-- about section -->
<section class="about text-center" id="about" style="margin-top: 4%;">
    <div class="container">
        <div class="row">
            <h2><?php echo $txt[1]; ?></h2>
            <h4><?php echo $txt[2]; ?></h4>
            <div class="col-md-4 col-sm-6">
                <div class="single-about-detail clearfix">
                    <div class="about-img">
                        <img src="<?php echo $img_i[13]; ?>" alt="">
                    </div>
                    <div class="about-details">
                        <div class="pentagon-text">
                            <h1><?php echo $txt[3]; ?></h1>
                        </div>
                        <h3><?php echo $txt[4]; ?></h3>
                        <p><?php echo $txt[5]; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-about-detail">
                    <div class="about-img">
                        <img class="img-responsive" src="<?php echo $img_i[14]; ?>" alt="">
                    </div>

                    <div class="about-details">
                        <div class="pentagon-text">
                            <h1><?php echo $txt[6]; ?></h1>
                        </div>

                        <h3><?php echo $txt[7]; ?></h3>
                        <p><?php echo $txt[8]; ?></p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-6">
                <div class="single-about-detail">
                    <div class="about-img">
                        <img class="img-responsive" src="<?php echo $img_i[15]; ?>" alt="">
                    </div>

                    <div class="about-details">
                        <div class="pentagon-text">
                            <h1><?php echo $txt[9]; ?></h1>
                        </div>

                        <h3><?php echo $txt[10]; ?></h3>
                        <p><?php echo $txt[11]; ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end of about section -->

<!-- service section starts here -->
<!-- DIRETORIA ATUAL  -->

 <section class="service text-center" id="service">
    <div class="container">
        <div class="row">
            <h2><?php echo $txt[12]; ?></h2>
            <h4><?php echo $txt[13]; ?></h4>

            <div class="col-md-3 col-sm-6">
                <div class="single-service">
                  
                    <!-- <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[4]; ?>" alt="">
                        </div>
                    </div>
                  
                  -->
                  
                    <h3><?php echo $txt[14]; ?></h3>
                </div>
            </div>
          
            <div class="col-md-3 col-sm-6">
                <div class="single-service">
                  <!--
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[5]; ?>" alt="">
                        </div>                
                    </div>
                  -->
                    <h3><?php echo $txt[15]; ?></h3>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="single-service">
                  <!--
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[6]; ?>" alt="">
                        </div>
                    </div>
                  -->
                    <h3><?php echo $txt[16]; ?></h3>
                </div>
            </div>
          
            <div class="col-md-3 col-sm-6">
                <div class="single-service">
                  <!--
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[12]; ?>" alt="">
                        </div>
                    </div>
                  -->
                    <h3><?php echo $txt[17]; ?></h3>
                </div>
            </div>
          
          
          <div class="col-md-6 col-sm-6">
                <div class="single-service">
                  <!--
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[12]; ?>" alt="">
                        </div>
                    </div>
                  -->
                    <h3> DAYENE CARLOS MOTA DA COSTA<br>Diretora Financeira</h3>
                </div>
            </div>
          
          <div class="col-md-6 col-sm-6">
                <div class="single-service">
                  <!--
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[12]; ?>" alt="">
                        </div>
                    </div>
                  -->
                    <h3>ADRILENE CRISTINA MARINHO DOS SANNTOS<br>Diretora Financeira Adjunta</h3>
                </div>
            </div>
          
        </div>
      
      
      <div class="row">
            <h2>CONSELHO FISCAL </h2>

            <div class="col-md-4 col-sm-6">
                <div class="single-service">
                  
                    <!-- <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[4]; ?>" alt="">
                        </div>
                    </div>
                  
                  -->
                  
                    <h3>CÁSSIA RODRIGUES LIMA FERREIRA</h3>
                </div>
            </div>
          
            <div class="col-md-4 col-sm-6">
                <div class="single-service">
                  <!--
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[5]; ?>" alt="">
                        </div>                
                    </div>
                  -->
                    <h3>VERA LUCIA SILVA REAIS </h3>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="single-service">
                  <!--
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[6]; ?>" alt="">
                        </div>
                    </div>
                  -->
                    <h3>JOSIANE MORERIRA COSTA</h3>
                </div>
            </div>
          
            <div class="col-md-4 col-sm-6">
                <div class="single-service">
                  <!--
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[12]; ?>" alt="">
                        </div>
                    </div>
                  -->
                    <h3>ANA CAROLINE ALVES FABRINI MAGALHÃES <br>(Suplente)</h3>
                </div>
            </div>
          
          
          <div class="col-md-4 col-sm-6">
                <div class="single-service">
                  <!--
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[12]; ?>" alt="">
                        </div>
                    </div>
                  -->
                    <h3>CLÁUDIA MILENE MARTINS DA SILVA <br>(Suplente)</h3>
                </div>
            </div>
          
          <div class="col-md-4 col-sm-6">
                <div class="single-service">
                  <!--
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[12]; ?>" alt="">
                        </div>
                    </div>
                  -->
                    <h3>ROQUELIA FERREIRA CAETANO GUEDES <br>(Suplente)</h3>
                </div>
            </div>
          
        </div>
      
      
      
    </div>
</section> 


<div class="row text-center" id="cursos">
            <p class="bg-info" style="font-size: 25px; text-align: center; color: #42b3e5;">Cursos</p>
        
            <div class="col-md-12">
                <a href="http://www.cmmg.edu.br/cursos/farmacia-clinica-e-farmacologia-aplicada-a-pratica-clinica/" style="text-decoration:none" target="cmmg">
                    <img src="http://www.amfar.com.br/amfar_novo/img/bannernovo.jpg" style="width: auto; height: auto; margin:0 auto;" class="img-responsive" border="0" >
                </a>
                 <h4 style="color: #42b3e5;">Previsão de início em 2019</h4>
                <a style="font-size: 30px; color: #42b3e5;" href="http://www.cmmg.edu.br/cursos/farmacia-clinica-e-farmacologia-aplicada-a-pratica-clinica/">
                    <button type="button"  style="margin-bottom: 10px; margin-top: 5px; " class="btn btn-info btn-lg">Mais Detalhes</button>      
                </a> 
            </div>
        
        </div>

<!-- end of service section -->


<!-- team section -->
<!-- DIRETORIA ATUAL  -->
<!-- <section class="team" id="blog">
    <div class="container">
        <div class="row">
            <div class="team-heading text-center">
                <h2><?php echo $txt[39]; ?></h2>
                <h4><?php echo $test_texto[1]; ?></h4>
                <span><?php echo $test_ass[1]; ?></span>
                <hr />
                <h4><?php echo $test_texto[2]; ?></h4>
                <span><?php echo $test_ass[2]; ?></span>
                <hr />
                <h4><?php echo $test_texto[3]; ?></h4>
                <span><?php echo $test_ass[3]; ?></span>
                <hr />
                <h4><?php echo $test_texto[4]; ?></h4>
                <span><?php echo $test_ass[4]; ?></span>
            </div>

        </div>
    </div>
</section> 
<!-- end of service section -->

<section class="service text-center" id="noticias" style="margin-top: 0 !important;">
    <div class="container">
        <div class="row">
            <div class="team-heading text-center">
                <h2><?php echo $txt[41]; ?></h2>
                <h4><?php echo $novo_texto[1]; ?></h4>
                <h4><?php echo $novo_texto[2]; ?></h4>
                <h4><?php echo $novo_texto[3]; ?></h4>
                <h4><?php echo $novo_texto[4]; ?></h4>
                <h4><?php echo $novo_texto[5]; ?></h4>
            </div>

        </div>
    </div>
</section>


<!-- map section -->
<section class="service" id="team" style="margin-top: 0;">

    <div class="row">
      <div class="col-md-12">
        <div class="contact-heading text-center">
          <h2>Localização</h2>
        </div>
        <center> 
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15003.393377795406!2d-43.95513484430329!3d-19.930794625893576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d12003c751c774c!2sAssocia%C3%A7%C3%A3o+Mineira+de+Farmac%C3%AAuticos!5e0!3m2!1spt-BR!2sbr!4v1556198947504!5m2!1spt-BR!2sbr" 
          height="550" frameborder="0" style="width:100%;border-top:1%;" allowfullscreen>
          </iframe>
        </center>
      </div>
    </div>

</section>
<!-- end of map section -->

<!-- contact section starts here -->
<section class="service" style="margin-top: 0;">
    <div class="container">
        <div class="row">
            <div class="contact-caption clearfix">
                <div class="contact-heading text-center">
                    <h2><?php echo $txt[23]; ?></h2>
                </div>

                <div class="col-md-5 contact-info text-left">
                    <h3><?php echo $txt[24]; ?></h3>
                    <div class="info-detail">
                        <ul><li><i class="fa fa-calendar"></i><span><?php echo $txt[27]; ?></span><?php echo $txt[28]; ?></li></ul>
                        <ul><li><i class="fa fa-map-marker"></i><span>Endereço : </span>AV. DO CONTORNO, 9215 - S. 502 - PRADO </li></ul>
                        <ul><li><i class="fa fa-phone"></i><span><?php echo $txt[32]; ?></span><?php echo $txt[33]; ?></li></ul>
                        <ul><li><i class="fa fa-phone"></i><span>WhatsApp:</span> (31) 9 97973283</li></ul>
                        <ul><li><i class="fa fa-fax"></i><span><?php echo $txt[34]; ?></span><?php echo $txt[35]; ?></li></ul>
                        <ul><li><i class="fa fa-envelope"></i><span><?php echo $txt[36]; ?></span><?php echo $txt[37]; ?></li></ul>
                    </div>
                </div>


                <div class="col-md-6 col-md-offset-1 contact-form">
                    <h3><?php echo $txt[38]; ?></h3>

                    <form class="form">
                        <input class="name" type="text" placeholder="Nome">
                        <input class="email" type="email" placeholder="Email">
                        <input class="phone" type="text" placeholder="Telefone de Contato:">
                        <textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Menssagem"></textarea>
                        <input class="submit-btn" type="submit" value="Enviar">
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- end of contact section -->

<section class="service text-center" id="link" style="margin-top: 0;">
    <div class="container">
        <div class="row">
            <h2><?php echo $txt[40]; ?></h2><br />
            <ul>
                
                <?php
                if($_GET['prx'] == "" && $_GET['ant'] == "")
                {
                    $prx = 0;
                    $ant = 6;
                }
                else
                {
                    $prx = $_GET['prx'];
                    $ant = $_GET['ant'];
                }
                for($i = $prx; $i <= $ant;$i++)
                {
                    echo "<li><a href='$link_end[$i]'><h4 style='margin-bottom: 20px;'>$link_des[$i]</h4></a></li>";
                }
                ?>
                
                    <?php if($_GET['prx'] != 0){
           $prx -=  6;
           $ant -= 6;
           echo "<h4 style='margin-bottom: 15px;'><a href='index.php?prx=$prx&ant=$ant#link' style='color:#fff'>Anterior</a></h4>";
       } if($_GET['prx'] != 132){$prx = $_GET['prx'] + 6; $ant = $_GET['ant'] + 6;  echo "&emsp;<h4 style='margin-bottom: 15px;'><a href='index.php?prx=".$prx."&ant=".$ant."#link' style='color:#fff'>Próximo</a></h4>";}?>                
            </ul>
            
    </div>
</section>
<hr />
<?php include("footer.php"); ?>