<?php
<<<<<<< HEAD
	/*define("RACINE", $_SERVER["DOCUMENT_ROOT"] . "/ProjetMVC-AJAX/");
	define("RACINEWEB", "http://" . $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . "/ProjetMVC-AJAX/");
	*/
	
	function __autoload($classe)
	{
		$repertoires = array(	"./controleurs/", 
							"./modeles/", 
							"./vues/");
		
		foreach($repertoires as $rep)
		{
			if(file_exists($rep . $classe . ".php"))
			{
				require_once($rep . $classe . ".php");
				return;
			}
		}
	}
	
	Routeur::route();
?>