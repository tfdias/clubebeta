<section class="section-head">
                <div class="container">
                    <div class="row-fluid top-row">
              
                        <div class="span5">
                            <div class="logo">
                                <span class="icon">
                                    <img alt="" src="images/logo.png" />
                                </span>
                                <span class="text">
                                    <a href="index.php">Clube<span> da </span>Mulher</a>
                                </span>
                            </div>
                        </div>
              
                        <div class="span7">
                             <div class="top-menu">
                                <ul class="inline">
                                    <li><a href="checkout-1.php">Revista</a></li>
                                    <li id="divAlterarDados" style="display:none;"><a href="checkout-1.php">Alterar dados</a></li>
                                    <li><a href="contact.php">Contato</a></li>
                                    <li id="divLogin"><a id="cadastrese" class="fancybox" href="#formLogin">Login</a></li>
                                    <li><a id="a_cadastro" href="http://www.clubedamulher.com.br">Cadastre-se</a></li>
                                    <li id="info">Olááá Amiga!</li>
									<li id="divLogout" style="display:none;"><a href="">Sair</a></li>
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
                                    <!-- Início Carrinho -->
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
                                    <!-- Fim do Carrinho -->
                            
                                <!--div class="search-field-holder">
                                    <form />
                                        <input class="span12" type="text" placeholder="Type and hit enter" />
                                        <i class="icon-search"></i>
                                    </form>
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>