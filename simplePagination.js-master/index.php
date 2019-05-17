<?php include("menu.php"); ?>
<section class="slider" id="home">
    <div class="container-fluid">
        <div class="row">

        <div class="col-md-4">
            <img src="img/AMF - curso 1-mini.jpg" alt="">
        </div>

        <div class="col-md-4">
           <img src="img/AMF - curso 2-mini.jpg" alt="">
        </div>
        <div class="col-md-4">
            <img src="img/AMF - curso 3-mini.jpg" alt="">
        </div>


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
    </div>
</section><!-- end of slider section -->
<!-- about section -->
<section class="about text-center" id="about">
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
</section><!-- end of about section -->
<!-- service section starts here -->
<!-- DIRETORIA ATUAL  -->
<!-- <section class="service text-center" id="service">
    <div class="container">
        <div class="row">
            <h2><?php echo $txt[12]; ?></h2>
            <h4><?php echo $txt[13]; ?></h4>

            <div class="col-md-3 col-sm-6">
                <div class="single-service">
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[4]; ?>" alt="">
                        </div>
                    </div>
                    <h3><?php echo $txt[14]; ?></h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-service">
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[5]; ?>" alt="">
                        </div>
                    </div>
                    <h3><?php echo $txt[15]; ?></h3>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="single-service">
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[6]; ?>" alt="">
                        </div>
                    </div>
                    <h3><?php echo $txt[16]; ?></h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-service">
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="img-responsive" src="<?php echo $img_i[12]; ?>" alt="">
                        </div>
                    </div>
                    <h3><?php echo $txt[17]; ?></h3>
                </div>
            </div>
        </div>
    </div>
</section> -->

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
</section> -->
<!-- end of service section -->

<section class="service text-center" id="novidades">
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
<section class="team" id="team">
    <div class="container">
        <div class="row">
            <div class="team-heading text-center">
                <h2><?php echo $txt[18]; ?></h2>

                <h4><?php echo $txt[19]; ?></h4>
                <center><img class="img-responsive" src="<?php echo $img_i[10]; ?>" alt=""></center>
            </div>
        </div>
    </div>
</section><!-- end of team section -->

<!-- map section -->
<section class="api-map" id="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 map" id="map"></div>
        </div>
    </div>
</section><!-- end of map section -->

<!-- contact section starts here -->
<section class="contact">
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
                        <ul><li><i class="fa fa-map-marker"></i><span><?php echo $txt[30]; ?></span><?php echo $txt[31]; ?></li></ul>
                        <ul><li><i class="fa fa-phone"></i><span><?php echo $txt[32]; ?></span><?php echo $txt[33]; ?></li></ul>
                        <ul><li><i class="fa fa-fax"></i><span><?php echo $txt[34]; ?></span><?php echo $txt[35]; ?></li></ul>
                        <ul><li><i class="fa fa-envelope"></i><span><?php echo $txt[36]; ?></span><?php echo $txt[37]; ?></li></ul>
                    </div>
                </div>


                <div class="col-md-6 col-md-offset-1 contact-form">
                    <h3><?php echo $txt[38]; ?></h3>

                    <form class="form">
                        <input class="name" type="text" placeholder="Name">
                        <input class="email" type="email" placeholder="Email">
                        <input class="phone" type="text" placeholder="Phone No:">
                        <textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                        <input class="submit-btn" type="submit" value="Enviar">
                    </form>
                </div>

            </div>
        </div>
    </div>
</section><!-- end of contact section -->
<section class="service text-center" id="link">
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
                    echo "<li><a href='$link_end[$i]'><h4>$link_des[$i]</h4></a></li>";
                }
                ?>
                
                    <?php if($_GET['prx'] != 0){
           $prx -=  6;
           $ant -= 6;
           echo "<a href='index.php?prx=$prx&ant=$ant#link' style='color:#fff'>Anterior</a>";
       } if($_GET['prx'] != 132){$prx = $_GET['prx'] + 6; $ant = $_GET['ant'] + 6;  echo "&emsp;<a href='index.php?prx=".$prx."&ant=".$ant."#link' style='color:#fff'>Próximo</a>";}?>                
            </ul>
            
    </div>
</section>
<hr />
<?php include("footer.php"); ?>