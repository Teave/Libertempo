<?php

define('ROOT_PATH', '../');
require_once ROOT_PATH . 'define.php';

include_once ROOT_PATH .'fonctions_conges.php' ;
include_once INCLUDE_PATH .'fonction.php';

$PHP_SELF=$_SERVER['PHP_SELF'];

//recup de la langue
$lang=(isset($_GET['lang']) ? $_GET['lang'] : ((isset($_POST['lang'])) ? $_POST['lang'] : "") ) ;


	header_popup('PHP_CONGES : Installation');

	// affichage du titre
	echo "<center>\n";
	echo "<br><H1><img src=\"". IMG_PATH ."tux_config_32x32.png\" width=\"32\" height=\"32\" border=\"0\" title=\"". _('install_install_phpconges') ."\" alt=\"". _('install_install_phpconges') ."\"> ". _('install_install_titre') ."</H1>\n";
	echo "<br><br>\n";

	\install\Fonctions::lance_install($lang);

	bottom();
