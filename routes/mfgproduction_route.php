<?php
if($page=="create-mfgproduction"){
	$found=include("views/pages/ui/mfgproduction/create_mfgproduction.php");
}elseif($page=="edit-mfgproduction"){
	$found=include("views/pages/ui/mfgproduction/edit_mfgproduction.php");
}elseif($page=="mfg_productions"){
	$found=include("views/pages/ui/mfgproduction/manage_mfgproduction.php");
}elseif($page=="details-mfgproduction"){
	$found=include("views/pages/ui/mfgproduction/details_mfgproduction.php");
}elseif($page=="view-mfgproduction"){
	$found=include("views/pages/ui/mfgproduction/view_mfgproduction.php");
}
?>
