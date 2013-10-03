<?php
include ("conexao_bd.php"); 
?>
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
        
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
        <script src="css/bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/css_browser_selector.js"></script>

        <script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing-1.3.js"></script>
       
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    
       


        <script type="text/javascript" src="js/script.js"></script>
        

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>
    
<div id="fb-root"></div>
<script>

  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '678613135484178', // App ID
//      channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
 
            // Função que será chamada automaticamente quando hover mudança no status da sessão do usuário
            // que irá acontecer quando ele clicar no botão Entrar
            FB.Event.subscribe('auth.authResponseChange', function(response) {
                //Se o usuário estiver logado no facebook e já deu as permissões para seu aplicativo o status será connected
                if (response.status === 'connected') {
                    // Executa a função usuarioConectado().
                    usuarioConectado();
                }  else {
					$('#divLogout').hide();
					$('#divAlterarDados').hide();
				}
            });
 
  };
 
  // Load the SDK asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
  
          // Função de exemplo que é executada quando o usuário esta logado e já deu as permissões para o aplicativo.
        function usuarioConectado() {
            // Com a função FB.api, é possível fazer chamadas para o Graph API.
            // Usando o parâmetro /me , você pode solicitar informações do usuário conectado.
            FB.api('/me', function(response) {
                // Usando jQuery, será exibido no paragrafo com id info as informações abaixo, capturdas com o FB.api.
				<!--   '<br>Email: '+response.email + -->
                <!--$('#foto').html('<img src="https://graph.facebook.com/'+response.username+'/picture" alt="'+response.name+'" />');-->
                $('#info').html(response.name);
				$('#divLogin').hide();
				$('#divAlterarDados').show();
				$('#divLogout').show();
				
				$("#divLogout").click(function(){
					logoutUsuario();
         		});
            });
        }

		//Realiza o loggout do usuário.
        function logoutUsuario() {

			FB.logout(function(response) {
				$('#info').html('Olá Visitante!');
				$('#divLogin').show();
				$('#divAlterarDados').hide();
				$('#divLogout').hide();
    		});
		}
</script>
    

        <div class="wrapper">
            <section class="section-head">
                <div class="container">
                    <div class="row-fluid top-row">
                        <div class="span4">
                             <div class="top-menu">
                                <ul class="inline">
                                    <li><a href="checkout-1.php">Revista</a></li>
                                    <li id="divAlterarDados" style="display:none;"><a href="checkout-1.php">Alterar dados</a></li>
                                    <li id="divLogin"><fb:login-button scope="email"></fb:login-button></li>
                                    <li><a href="checkout-1.php">Cadastre-se</a></li>
                                </ul>
                                <ul class="inline">
                                    <li><a href="contact.php">Contato</a></li>
									<li id="divLogout" style="display:none;"><a href="#">Sair</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="span4">
                            <div class="logo">
                                <span class="icon">
                                    <img alt="" src="images/logo.png" />
                                </span>
                                <span class="text">
                                    <a href="index.php">Cosmeti<span>co</span></a>
                                </span>
                            </div>
                        </div>

                        <div class="span4">
                            <div class="top-menu cart-menu">
                                <ul class="inline">
                                    <li id="info">Olá Visitante!</li>
                                    <li>
                                    
                                        <!--Checkout-->
                                        <div class="basket">
                                        	<!--Total de Itens no Checkout-->
                                            <div class="basket-item-count">
                                                3
                                            </div>
                                            <!--Total dos Produtos no Checkout-->
                                            <div class="total-price-basket">
                                                $0.00
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" data-hover="dropdown" href="#">
                                                    <img alt="basket" src="images/icon-basket.png" />
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <!--Exibição dos Produtos no Checkout-->
                                                    <li>
                                                        <div class="basket-item">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <div class="thumb">
                                                                        <img alt="" src="img_produtos/<?PHP print $foto_exibicao; ?>" />
                                                                    </div>
                                                                </div>
                                                                <div class="span8">
                                                                    <div class="title"><?PHP print $descricao; ?></div>
                                                                    <div class="price"><?PHP print $productprice; ?></div>
                                                                </div>
                                                            </div>
                                                            <a class="close-btn" href="#"></a>
                                                        </div>
                                                    </li>
                                                    <li class="checkout">
                                                        <a href="shopping-cart.php" class="cusmo-btn">checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="top-categories">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="span9">
                                <ul class="inline">
                                    <li>
                                        <a href="products-grid.php">face</a>
                                    </li>
                                    <li><a href="products-grid.php">body</a></li>
                                    <li><a href="products-grid.php">make up</a></li>


                                    <li><a href="products-grid.php">hairs</a></li>
                                    <li><a href="products-grid.php">perfumes</a></li>
                                    <li><a href="products-grid.php">gifts</a></li>
                                    <li><a href="products-grid.php">brands</a></li>
                                    <li><a href="products-grid.php">must have</a></li>

                                </ul>
                            </div>
                            <div class="span3">
                                <div class="search-field-holder">
                                    <form />
                                        <input class="span12" type="text" placeholder="Type and hit enter" />
                                        <i class="icon-search"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
                            <li class="active"><a data-toggle="tab" href="#hot-products">Hot products</a></li>
                            <li><a data-toggle="tab" href="#new-products">New products</a></li>
                            <li><a data-toggle="tab" href="#best-sellers">Best sellers</a></li>
                        </ul>
                    </div>
                    
					<?php 
                    
                    //Inicia o Loop para pegar os produtos
                    $sqlteam = "SELECT * FROM produtos WHERE ativo = 1"; 
                    $resultsteam = mysql_query($sqlteam); 
                    while ($sqlrow = mysql_fetch_array($resultsteam)){ 
                            $cardid = $sqlrow['id'];
                            $titulo = $sqlrow['marca'];
                            $foto_exibicao = $sqlrow['foto_exibicao'];
                            $productprice = $sqlrow['valor'];
                            $preco = $sqlrow['valor'];
                            $preco = number_format($preco,2,',','.');
                            $descricao = $sqlrow['descricao'];
                    ?>      
                    
                    <div class="tab-content">
                        <div id="hot-products" class="products-holder active tab-pane ">
							
                            <!--Div que contém as colunas de exibição dos produtos-->
                            <div class="row-fluid">
                            	
                            <!--Div que contém a imagem e o preço dos produtos-->  
                            <?php
								
							   $columncount = 0;	
								
							   $dynamicList .= '<div class="span3" style="margin-left:0px;">
													<div class="product-item">
														<a href="products-page.php">
															<img alt="" src="../thumbs/' . $foto_exibicao . '" />
															<h1>' . $titulo . '</h1>
														</a>
														<div class="tag-line">
															<!--<span>yellow diamond</span>-->
															<span>' . $descricao . '</span>
														</div>
														<div class="price">
														 ' . $productprice . '
														</div>
														<a class="cusmo-btn add-button" href="#">Adicionar</a>
													</div>
												</div>';					
								
						//Quando chegar a 3 produtos exibidos, quebra a linha.
						if($columncount == 4){
						  $dynamicList .= '\n';
						  $columncount = 0;
						}else{
						  $columncount++; 
					   }
									
					} //Encerra o while
									
					echo $dynamicList; //Exibe os produtos										
								
					?>

                            <div class="load-more-holder">
                                <a href="#hot-products" class="load-more">
                                    load more hot products
                                </a>
                            </div>

                        </div>

                        <div id="new-products" class="products-holder  tab-pane ">
     
                            <!--Div que contém as colunas de exibição dos produtos-->
                            <div class="row-fluid">
                            
                                <!--Div que contém a imagem e o preço dos produtos-->
                                <div class="span3">
                                    <div class="product-item">
                                        <a href="products-page.php">
                                            <img alt="" src="images/p9.jpg" />
                                            <h1>blue</h1>
                                        </a>
                                        <div class="tag-line">
                                            <span>yellow diamond</span>
                                            <span>toilet water spray</span>
                                        </div>
                                        <div class="price">
                                            $170.00
                                        </div>
                                        <a class="cusmo-btn add-button" href="#">add to cart</a>
                                    </div>
                                </div><!--Encerra a exibição dos produtos-->

                            </div><!--Encerra a coluna dos produtos-->
                            
                            <div class="load-more-holder">
                                <a href="#new-products" class="load-more">
                                    load more hot products
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="best-sellers" class="products-holder  tab-pane ">

	                    <!--Div que contém as colunas de exibição dos produtos-->
                        <div class="row-fluid">
                        
	                        <!--Div que contém a imagem e o preço dos produtos-->
                            <div class="span3">
                                <div class="product-item">
                                    <a href="products-page.php">
                                        <img alt="" src="images/p5.jpg" />
                                        <h1>versace</h1>
                                    </a>
                                    <div class="tag-line">
                                        <span>yellow diamond</span>
                                        <span>toilet water spray</span>
                                    </div>
                                    <div class="price">
                                        $270.00
                                    </div>
                                    <a class="cusmo-btn add-button" href="#">add to cart</a>
                                </div><!--Encerra a exibição dos produtos-->
                                
                            </div><!--Encerra a coluna dos produtos-->
                            
                        </div>
                        
                        <div class="load-more-holder">
                            <a href="#best-sellers" class="load-more">
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

            <section class="section-footer">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span3">
                            <div class="footer-links-holder">
                                <h2>informations</h2>
                                <ul>
                                    <li><a href="#">our blog</a></li> 
                                    <li><a href="#">about our shop</a></li> 
                                    <li><a href="#">secure shopping</a></li>
                                    <li><a href="#">privacy policy</a></li>
                                    <li><a href="#">delivery informations</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="footer-links-holder">
                                <h2>customer care</h2>
                                <ul>
                                    <li><a href="#">contact us</a></li> 
                                    <li><a href="#">site map</a></li> 
                                    <li><a href="#">top sales & bestsellers</a></li>
                                    <li><a href="#">gift vouchers</a></li>
                                    <li><a href="#">best sellers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="footer-links-holder">
                                <h2>your account</h2>
                                <ul>
                                    <li><a href="#">order status</a></li> 
                                    <li><a href="#">my wishlist</a></li> 
                                    <li><a href="#">delivery address</a></li>
                                    <li><a href="#">order history</a></li>
                                    <li><a href="#">newsletter</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="footer-links-holder">
                                <h2>get in touch</h2>
                                <p>
                                    Cosmetico Shop<br />
                                    Good Town 122, Beaty Centre<br />
                                    (011) 212 222 22
                                </p>
                                <ul class="inline social-icons">
                                    <li><a href="#" class="icon-facebook"></a></li> 
                                    <li><a href="#" class="icon-google-plus"></a></li> 
                                    <li><a href="#" class="icon-rss"></a></li>

                                    <li><a href="#" class="icon-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-copyright">
                <div class="container">
                    <div class="copyright pull-left">
                        <p>
                            <strong>© COSMETICO 2013</strong>. All rights reserved.<br />
                            Designed by <a href="http://themeforest.net/user/bcube?ref=bcube">Michael Kowalski</a> | Coded by <a href="http://themeforest.net/user/leamino?ref=leamino">LeAmino</a>
                        </p>
                    </div>
                    <div class="copyright-links pull-right">
                        <ul class="inline">
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">terms & conditions</a></li>
                            <li><a href="#">site map</a></li>
                        </ul>
                    </div>
                </div>
            </section>

        </div>



    </body>


</html>
