<?php
/**
 * Created by Notepad++
 * @author: Mutter Peter <mupetya@yahoo.co.uk>
 * Date: 2017.07.21.
 * Time: 1:12 am
 */
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors',1);
header("Content-Type: text/html; charset=utf-8");
//include 'template.php';
//include 'my_database_connection_pdo.php';
//include 'menu.php';

//$tmp = new template("opinion.html");

if(!(class_exists('GetLanguage'))) {
	include_once 'classes/GetLanguage.php'; 
}

$script = ' <script language="javascript" src="jquery-1.8.3.min.js"></script>
			   <link rel="stylesheet" type="text/css" href="main.css">
			   <link rel="stylesheet" type="text/css" href="opinion.css">';
			  
//Alapértelmezett nyelvi beállítási érték. (Az alapértelmezett nyelv a Magyar nyelv.)
$lang_hu = '<img src="images/lang_hu.png"/>';

//Template html fájl (felület) meghatározása
$template_file = 'opinion.html';

//A 'setLanguageForPage' nevű statikus metódus meghívása. (a többnyelvűség általános működésének végrehajtása)  
GetLanguage::setLanguageForPage($template_file, basename(__FILE__), $script, $lang_hu);

		  
/*			  
			  $pdo = newPdoConnection();
			  $ip = $_SERVER['REMOTE_ADDR'];
			  
			   $aktualis_nyelv = "_hu";
			   $lang_hu = '<img src="images/lang_hu.png"/>';
			   
			  if (!empty($_GET["lang"])) { 
			  $_SESSION['languages'] = $_GET["lang"];
			  }
			  if ($_SESSION['languages'] == "_hu") {
			  include (@"lang/hu.php"); 
			  $aktualis_nyelv = "_hu"; 
			   $lang_hu = '<img src="images/lang_hu.png"/>';
				   $lang_en = '<a class="nyelvkep" href="'.basename($_SERVER["PHP_SELF"]).'?lang=_en"><img onMouseOver="this.style.opacity=1; this.filters.alpha.opacity=100" onMouseOut="this.style.opacity=0.4; this.filters.alpha.opacity=40"src="images/lang_en.png"/></a>';
			  }
			  if ($_SESSION['languages'] == "_en") {
			  include (@"lang/en.php"); 
			  $aktualis_nyelv = "_en"; 
			  $lang_en =  '<img src="images/lang_en.png"/>';
				   $lang_hu = '<a class="nyelvkep" href="'.basename($_SERVER["PHP_SELF"]).'?lang=_hu"><img onMouseOver="this.style.opacity=1; this.filters.alpha.opacity=100" onMouseOut="this.style.opacity=0.4; this.filters.alpha.opacity=40"src="images/lang_hu.png"/></a>';
			  }
			  
$tmp->set('script',$script);
$tmp->set('lang_hu', $lang_hu);	
$tmp->set('lang_en', $lang_en);
$tmp->set('menu_item', $menu_item);
echo $tmp->get();
*/




?>