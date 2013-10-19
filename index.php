<!DOCTYPE html>
<html>
    <head>

        <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <title>Clube da Mulher</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700,600,800' rel='stylesheet' type='text/css' />
        <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

        <link href="css/flexslider.css" rel="stylesheet" />

        <!--[if IE 7]>
      
        <link href="css/font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">
        
        <![endif]-->
        <link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/jquery.fancybox.css" media="screen"/>
        
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
        <script src="css/bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/css_browser_selector.js"></script>

        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing-1.3.js"></script>
       
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    
		<script type="text/javascript" src="js/jquery.fancybox.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
       


		<script src="js/waypoints.min.js"></script> 
		<script src="js/waypoints-sticky.js"></script> 
   		<script type="text/javascript" src="js/fb_cdm.js"></script> 

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
	</head>
    <body>
    
<div id="fb-root"></div>
        <div class="wrapper">
		<!-- Início Cabeçalho -->
           
			<?php include ('cabecalho.php') ?>

		<!-- Fim Cabeçalho -->
            <section id="home" class="home-slider">
                <div class="container">
                    <div class="flexslider">
                        <ul class="slides">
                            <li class="slide">
                                <img alt="" src="images/slide01.png" />
                                <div class="flex-caption">
                                    <h1>embrace</h1>
                                    <div class="medium">
                                        <span>to the new season</span>
                                    </div>
                                    <div class="small">
                                        <span>very short one or two sentences</span>
                                    </div>
                                    <div class="small yellow">
                                        <span>portable.beauty.personal</span>
                                    </div>
                                    <div>
                                        <span><a class="cusmo-btn" href="#">see details</a></span>

                                    </div>

                                </div>
                            </li>
                            <li class="slide">
                                <img alt="" src="images/slide01.png" />
                                <div class="flex-caption">
                                    <h1>Fashion</h1>
                                    <div class="medium">
                                        <span>you can use this theme</span>
                                    </div>
                                    <div class="small">
                                        <span>for your small business</span>
                                    </div>
                                    <div class="small yellow">
                                        <span>beauty.creative.smart</span>
                                    </div>
                                    <div>
                                        <span><a class="cusmo-btn" href="#">learn more</a></span>

                                    </div>

                                </div>
                            </li>



                        </ul>
                    </div>
                </div>
            </section>

            <section class="section-home-products">
                <div class="container">
                    <div class="controls-holder nav-tabs">
                        <ul class="inline">
                            <li class="active"><a data-toggle="tab" href="#hot-products">Kits Especiais</a></li>
                            <li><a data-toggle="tab" href="#new-products">Novos Produtos</a></li>
                            <li><a data-toggle="tab" href="#best-sellers">Mais Vendidos</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="hot-products" class="products-holder active tab-pane ">
                            <!--Div que contém as colunas de exibição dos produtos-->
                            <div id="hot-products-row" class="row-fluid"></div>
                            <div class="load-more-holder">
                                <a id="hot-products-load-more" href="#hot-products-load" class="load-more">
                                    load more hot products
                                </a>
                            </div>
						</div>

                        <div id="new-products" class="products-holder tab-pane">
     
                            <!--Div que contém as colunas de exibição dos produtos-->
                            <div id="new-products-row" class="row-fluid"></div>
   	                        <div class="load-more-holder">
	                                <a id="new-products-load-more" href="#new-products" class="load-more">
                                    	load more hot products
                                	</a>
                            </div>
                    </div>

                    <div id="best-sellers" class="products-holder  tab-pane ">

	                    <!--Div que contém as colunas de exibição dos produtos-->
                        <div id="best-sellers-products-row" class="row-fluid"></div>
                        
                        <div class="load-more-holder">
                            <a id="best-sellers-load-more" href="#best-sellers" class="load-more">
                                load more hot products
                            </a>
                        </div>
                    </div>

                </div>
            </section>

            <section class="section-homepage-subscribe">
                <div class="container">
                    <div class="big-circle">

                        get the 
                        <div class="big"><span>$</span>10</div>
                        cupon 

                    </div>
                    <div class="offer-text">
                        Sign in for our newsletter and recieve a ten dollars cupon
                    </div>
                    <div class="email-holder">

                        <div class="email-field">

                            <form />
                                <input class=" required email" name="email" data-placeholder="Enter here your email address..." />
                                <button class="newsletter-submit-btn" type="submit" value=""><i class="icon-plus"></i></button>

                            </form>

                        </div>
                    </div>
                </div>
            </section>

			<!-- Início Rodapé -->
			<?php include ("rodape.php"); ?>
			<!-- Fim Rodapé -->

        </div>
		<!-- Início Tela de Login -->
		<?php include ("form_login.php"); ?>
		<!-- Fim Tela de Login -->
        
		<script type="text/javascript" src="js/produtos.js"></script>
        <script type="text/javascript" src="js/script.js"></script> 
        
<script>
	
	
jQuery(document).ready(function() {
								
carregaProdutos('hot-products');
								
$("#cadastrese").fancybox({
	'scrolling'		: 'no',
	'titleShow'		: false,
	'beforeClose'		: function() {
	    $("#login_error").hide();
	}
});
			
$('#a_cadastro').click(function(){
   document.location.href='form_cadastro.php';
   return false;
})


$("#login_form").bind("submit", function() {
	if ($("#login_name").val().length < 1 || $("#login_pass").val().length < 1) {
	    $("#login_error").show();
	    $.fancybox.resize();
	    return false;
	}

	$.fancybox.showActivity();

	$.ajax({
		type	: "POST",
		cache	: false,
		url		: "checkout-1.php",
		data	: $(this).serializeArray(),
		success: function(data) {
			$.fancybox(data);
		}
	});

	return false;
});
});
		
</script>
        
    </body>

</html>