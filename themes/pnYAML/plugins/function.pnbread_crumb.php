<?php
function smarty_function_pnbread_crumb($params, &$smarty) 
{
  extract($params); 
	unset($params);

	$currentMod = pnModGetName('currentMod');

	switch ($currentMod) {
	case "News":
		$currentMod = "Aktuelles";
		break;
	case "ContentExpress":
		$currentMod = "Dokumentation";
		break;
	case "legal":
		$currentMod = "Nutzungsbedingungen";
		break;
	case "pnForum":
		$currentMod = "Forum";
		break;
	case "Web_Links":
		$currentMod = "Linkmaschine";
		break;
	case "Search":
		$currentMod = "Suche";
		break;
	case "formicula":
		$currentMod = "Kontakt";
		break;
	case "Submit_News":
		$currentMod = "Beitrag einreichen";
		break;
	case "Static_Docs":
		$currentMod = "Dokumentation";
		break;
	case "pagesetter":
		$currentMod = "Dokumentation";
		break;
	case "MultiHook":
		$currentMod = "Glossar";
		break;
	case "Archive":
		$currentMod = "Archiv";
		break;
	case "User":
		$currentMod = "Profilseite";
		break;
	case "advanced_polls":
		$currentMod = "Umfrage";
		break;
	}

	$bread_crumb = pnVarPrepForDisplay($currentMod);
	return $bread_crumb;
}
?>