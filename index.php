<?php 
require_once("include/initialize.php"); 
$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) { 
	case 'apply' :
        $title="Enviar inscrição";	
		$content='applicationform.php';		
		break;
	case 'login' : 
        $title="Entrar";	
		$content='login.php';		
		break;
	case 'company' :
        $title="Empresas";	
		$content='company.php';		
		break;
	case 'hiring' :
		$title = isset($_GET['search']) ? 'Hiring in '.$_GET['search'] :"Hiring"; 
		$content='hirring.php';		
		break;		
	case 'category' :
        $title='Procurar '. $_GET['search'];	
		$content='category.php';		
		break;
	case 'viewjob' :
        $title="Detalhes do trabalho";	
		$content='viewjob.php';		
		break;
	case 'success' :
        $title="Sucesso";	
		$content='success.php';		
		break;
	case 'register' :
        $title="Registrar novo membro";	
		$content='register.php';		
		break;
	case 'Contact' :
        $title='Contate-nos';	
		$content='Contact.php';		
		break;	
	case 'About' :
        $title='Sobre nós';	
		$content='About.php';		
		break;	
	case 'advancesearch' :
        $title='Busca avançada';	
		$content='advancesearch.php';		
		break;	

	case 'result' :
        $title='resultado';	
		$content='advancesearchresult.php';		
		break;
	case 'search-company' :
        $title='Pesquisa por empresa';	
		$content='searchbycompany.php';		
		break;	
	case 'search-function' :
        $title='Pesquisa por Função';	
		$content='searchbyfunction.php';		
		break;	
	case 'search-jobtitle' :
        $title='Pesquisa por cargo';	
		$content='searchbytitle.php';		
		break;						
	default :
	    $active_home='active';
	    $title="Início";	
		$content ='home.php';		
}
require_once("theme/templates.php");
?>