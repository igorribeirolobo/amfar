<?php require 'header_and_menu.php'; 

require_once "config.php";   

require_once "class/crudUsuario.php";

$conf = crudUsuario::getInstance(Conexao::getInstance());

?>

<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Configurações de Usuario

            <small>Gerencie os usuarios em seu site</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>

            <li class="active">Configurações de Usuario</li>

        </ol>

    </section>

    <section class="content">

     

        <div class="row">

            <div class="col-xs-12">

                <div class="box">
                    	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your share button code -->
	<div class="fb-share-button" 
		data-href="http://www.your-domain.com/your-page.html" 
		data-layout="button_count">
	</div>
                </div>
            </div>
            
</div>
    </section>
<?php require 'footer.php'; ?>