<?php include("header.php"); ?>
<header class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-3 header-logo">
                <br>
                <a href="index.php"><img src="<?php echo $img_i[2] ?>"  alt="<?php echo $img_a[2] ?>"  title="<?php echo $img_t[2] ?>" width="45%" height="45%"> </a>
            </div>

            <div class="col-md-9">
                <nav class="navbar navbar-default">
                    <div class="container-fluid nav-bar">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-header">
                                <li><a style="font-size: 20px;" class="menu active" href="<?php echo $menu_link[1]; ?>" ><?php echo $menu_txt[1]; ?></a></li>
                                <li><a style="font-size: 20px;" class="menu" href="<?php echo $menu_link[2]; ?>"><?php echo $menu_txt[2]; ?></a></li>
                                <li><a style="font-size: 20px;" class="menu" href="#service">DIRETORIA</a></li>
                                <li><a style="font-size: 20px;" class="menu" href="<?php echo $menu_link[9]; ?>"><?php echo $menu_txt[9]; ?></a></li>
                               <!--  <li><a style="font-size: 20px;" class="menu" href="<?php echo $menu_link[3]; ?>"><?php echo $menu_txt[3]; ?></a></li> -->
                               <!--  <li><a style="font-size: 20px;" class="menu" href="<?php echo $menu_link[4]; ?>"><?php echo $menu_txt[4]; ?></a></li> -->
                                <li><a style="font-size: 20px;" class="menu" href="<?php echo $menu_link[5]; ?>"><?php echo $menu_txt[5]; ?></a></li>
                                <li><a style="font-size: 20px;" class="menu" href="<?php echo $menu_link[8]; ?>"><?php echo $menu_txt[8]; ?></a></li>
                                <li class="btn btn-info btn-sm"><a style="font-size: 20px;" class="menu" href="<?php echo $menu_link[7]; ?>"><?php echo $menu_txt[7]; ?></a></li>
                            </ul>
                        </div><!-- /navbar-collapse -->
                    </div><!-- / .container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</header> <!-- end of header area -->

