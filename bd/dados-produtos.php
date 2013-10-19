<?php 

$opcao = isset($_GET['opcao']) ? $_GET['opcao'] : '';

if (!empty($opcao)) {
	
	switch ($opcao) {
		
		case 'hot-products' : {
			echo getProdutosMaisVendidos();
			break;
		}		
		case 'new-products' : {
			echo getProdutosMaisVendidos();
			break;
		}
		case 'best-sellers' : {
			echo getProdutosMaisVendidos();
			break;
		}
		case 'hot-products-load-more' : {
			echo getProdutosMaisVendidos();
			break;
		}		
		case 'new-products-load-more' : {
			echo getProdutosMaisVendidos();
			break;
		}
		case 'best-sellers-load-more' : {
			echo getProdutosMaisVendidos();
			break;
		}
	}

} else {
	echo null;
}

function conectar() {

	$con = null;

	try { 
		$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'); 
		
		$pdo = new PDO("mysql:host=localhost; dbname=clubedam_newsletter;", "clubedam_user", "clubcampeao2013", $opcoes); 
		
		return $pdo;
		
	} catch (Exception $e) { 

		echo 'Erro: '.$e->getMessage(); return null; 

	} 

}

function getProdutosMaisVendidos() {

	$pdo = conectar();
	$sql = 'SELECT * FROM produtos WHERE ativo = 1'; 
	$stm = $pdo->prepare($sql); 
	$stm->execute(); 
	echo json_encode($stm->fetchAll(PDO::FETCH_ASSOC)); 
	$pdo = null;

}

?>